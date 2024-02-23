<?php
// 將希望程式打開即運作的，放在全域之首
date_default_timezone_set("Asia/Taipei");
session_start();
class db
{

    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=member";
    protected $pdo;
    protected $table;

    // 類別宣告「即」啟用的
    public function __construct($table)
    {
        $this->table = $table;

        // 類別中，要吃到自己所處{}外的變數，需要加上$this->
        $this->pdo = new PDO($this->dsn, 'root', '');
    }


    // -----all-----

    // SELECT `col1`,`col2`,... FROM `table1`,`table2`,...　WHERE ...

    // $table已經存在了，所以可以拿掉
    function all($id = '', $other = '')
    {


        $sql = "select * from `$this->table` ";


        if (isset($this->table) && !empty($this->table)) {

            if (is_array($id)) {

                if (!empty($id)) {
                    $tmp = $this->a2s($id);
                    $sql .= " where " . join(" && ", $tmp);
                }
            } else {
                $sql .= " $id";
            }

            $sql .= $other;
            // echo 'all=>' . $sql;
            $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        } else {
            echo "錯誤:沒有指定的資料表名稱";
        }
    }


    // -----count-----

    // SELECT `col1`,`col2`,... FROM `table1`,`table2`,...　WHERE ...

    // $table已經存在了，所以可以拿掉
    function count($where = '', $other = '')
    {
        $sql = "select count(*) from `$this->table` ";

        if (isset($this->table) && !empty($this->table)) {

            if (is_array($where)) {

                if (!empty($where)) {
                    $tmp = $this->a2s($where);
                    $sql .= " where " . join(" && ", $tmp);
                }
            } else {
                $sql .= " $where";
            }

            $sql .= $other;
            //echo 'all=>'.$sql;
            $rows = $this->pdo->query($sql)->fetchColumn();
            return $rows;
        } else {
            echo "錯誤:沒有指定的資料表名稱";
        }
    }


    // -----find-----

    function find($id)
    {

        $sql = "select * from `$this->table` ";

        if (is_array($id)) {
            $tmp = $this->a2s($id);
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        // echo 'find=>' . $sql;
        $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // -----update+insert-----

    // function save($array){
    //     if(isset($array['id'])){
    //         $this->update($array['id'],$array);
    //     }else{
    //         $this->insert($array);
    //     }
    // }

    function save($array)
    {
        // update跟insert只差在有無$id，因此判斷其是否存在便可以分流處理
        if (isset($array['id'])) {
            $sql = "update `$this->table` set ";

            if (!empty($array)) {

                $tmp = $this->a2s($array);
            } else {
                echo "錯誤:缺少要編輯的欄位陣列";
            }

            $sql .= join(",", $tmp);
            $sql .= " where `id`='{$array['id']}'";
        } else {
            $sql = "insert into `$this->table` ";
            $cols = "(`" . join("`,`", array_keys($array)) . "`)";
            $vals = "('" . join("','", $array) . "')";

            $sql = $sql . $cols . " values " . $vals;
        }
        echo $sql;
        return $this->pdo->exec($sql);
    }



    // -----update-----

    // // UPDATE `table` SET `col1`='value1',`col2`='value2',...　WHERE ...


    // // 使用protected 保護update跟insert，使其修改只能透過SAVE -> 最後已合併至SAVE，因此不需要了
    function update( $id, $cols)
    {


        $sql = "update `$this->table` set ";
        // 因為要填入兩個變數，因此要分別判斷兩個變數
        // 判斷$cols
        if (!empty($cols)) {
            foreach ($cols as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
        } else {
            echo "錯誤:缺少要編輯的欄位陣列";
        }

        $sql .= join(",", $tmp);

        if (is_array($id)) {
            foreach ($id as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }


        echo $sql;
        return $this->pdo->exec($sql);

    }

    // -----delete-----

    // DELETE FROM `table` WHERE ...

    function del($id)
    {

        $sql = "delete from `$this->table` ";

        if (is_array($id)) {
            $tmp = $this->a2s($id);
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }

        echo 'del=>' . $sql;
        $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // -----insert-----


    // // INSERT INTO `table`(`col1`,`col2`,`col3`,`col4`,`col5`) 
    // //             VALUES('value1','value1','value1','value1','value1','value1');

    // // 使用protected 保護update跟insert，使其修改只能透過SAVE -> 最後已合併至SAVE，因此不需要了

    // protected function insert($values){




    // $sql = "insert into `$this->table` ";

    // // $cols="(``,``,``,``,)";
    // // $vals="('','','','',)";

    // $cols="(`".join("`,`",array_keys($values))."`)";
    // $vals="('".join("','",$values)."')";

    // $sql=$sql . $cols  ." values ".$vals;
    // // $sql=insert into `$table` . (``,``,``,``,) ." values ".('','','','',);

    // echo $sql;
    // return $this->pdo->exec($sql);


    // }

    // 新增一個函式讓使用者自由登打SQL語法以因應各種客製化需求
    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    private function a2s($array)
    {

        foreach ($array as $col => $value) {
            // 暫時存儲迴圈中生成的條件片段
            $tmp[] = "`$col`='$value'";
        }   
        // 把生成的$tmp丟回去給前面的程式使用
        return $tmp;
    }
}


function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

// 使用物件導向要先實例化(new)
// 物件的變數建議用大寫的方式做區隔，以便未來設其他變數時不會強碰
$User=new DB('users');
$Good=new DB('goods');
$Customer=new DB('customers');
$Message=new DB('store_messages');
$Admin=new DB('admins');
$About=new DB('about_us');
$Article=new DB('articles');
$Total=new DB('total');

if(!isset($_SESSION['visited'])){
    $Total->q("update `total` set `total`=`total`+1 where `id`=1");
    $_SESSION['visited']=1;

}


/**
 * 設計兩個function用來產生驗證碼和圖形
 * 驗證碼的部份可以指定長度也可以由函式亂數決定
 * 回傳值 :string
 */

function code(...$length){
  
    //使用亂數來產生驗證碼長度，判斷是否帶有參數來決定長度變數的產生方式
    $length=$length[0]??rand(4,8);

    //宣告一個空字串，用來存放驗證碼字串
    $gstr="";

    //使用for迴圈來產生符合$length的驗證碼
    for($i=0;$i<$length;$i++){

        //使用while迴圈來判斷字串是否有重覆的字元
        while(mb_strlen($gstr)<$i+1){

            //使用亂數來決定這一次迴圈的字元類型
            $type=rand(1,3);
            switch($type){
                case 1:
                    $t=rand(0,9);       //使用rand()來產生0~9的任一數字
                break;
                case 2:
                    $t=chr(rand(65,90));//使用chr()函式根據ASCII碼產生大寫字母
                break;
                case 3:
                    $t=chr(rand(97,122));//使用chr()函式根據ASCII碼產生小寫字母
                break;
            }

            //判斷亂數產生的字元是否已在$gstr字串中，不存在則加入，已存在則重新產生
            if(!mb_strpos($gstr,$t)){
                $gstr.=$t;
            }
        }
    }  
    return $gstr;
}

function captcha($str){
    $gstr=$str;

    //定義字型大小
    $fontsize=25;

    //建立一個陣列用來儲存每一個字元的圖形資訊
    $text_info=[];

    //建立兩個變數用來計算所有字元的總寬度及最大高度
    $dst_w=0;
    $dst_h=0;

    //使用迴圈來逐一分析每個字元的圖形資訊
    for($i=0;$i<mb_strlen($gstr);$i++){

        //使用mb_substr()順序取出每一個字元
        $char=mb_substr($gstr,$i,1);

        //使用亂數產生一個正負之間的傾斜的角度
        $text_info[$char]['angle']=rand(-25,25);

        //使用imagettfbbox()來取得單一字元在大小,角度和字型的影響下，字元圖形的四個角的坐標資訊陣列
        $tmp=imagettfbbox($fontsize,$text_info[$char]['angle'],realpath('./fonts/arial.ttf'),$char);

        //利用字元的資訊，使用x坐標的最大值減最小值來計算出字元寬度，使用y坐標的最大值-最小值來計出字元高度
        //因坐標特性，需要加上1才能得到正確的寬度及高度
        $text_info[$char]['width']=max($tmp[0],$tmp[2],$tmp[4],$tmp[6])-min($tmp[0],$tmp[2],$tmp[4],$tmp[6])+1;
        $text_info[$char]['height']=max($tmp[1],$tmp[3],$tmp[5],$tmp[7])-min($tmp[1],$tmp[3],$tmp[5],$tmp[7])+1;

        //累加每個字元的寬度來計算總寬度
        $dst_w+=$text_info[$char]['width'];

        //比較每一次字元的高度來決定最大高度
        $dst_h=($dst_h>=$text_info[$char]['height'])?$dst_h:$text_info[$char]['height'];

        //根據字型的資訊來取得字元的左上角坐標
        $text_info[$char]['x']=min($tmp[0],$tmp[2],$tmp[4],$tmp[6]);
        $text_info[$char]['y']=min($tmp[1],$tmp[3],$tmp[5],$tmp[7]);
    }
    
    //建立一個邊框的厚度變數
    $border=10;

    //使用計算出來的總寬度和最大高度加上邊框厚度來計算驗證碼圖形的完整寬高
    $base_w=$dst_w+($border*2);
    $base_h=$dst_h+($border*2);

    //根據計算出來的驗證碼圖形完整寬高來建立一個全彩圖形資源
    $dst_img=imagecreatetruecolor($base_w,$base_h);

    //顏色定義區
    $white=imagecolorallocate($dst_img,255,255,255);
    $black=imagecolorallocate($dst_img,0,0,0);
    $blue=imagecolorallocate($dst_img,0,0,255);
    $red=imagecolorallocate($dst_img,255,0,0);
    $green=imagecolorallocate($dst_img,0,255,0);

    //顏色陣列
    $colors=[imagecolorallocate($dst_img,255, 127, 80),
             imagecolorallocate($dst_img,204, 85, 0),
             imagecolorallocate($dst_img,184, 115, 51),
             imagecolorallocate($dst_img,204, 119, 34),
             imagecolorallocate($dst_img,112, 66, 20),
             imagecolorallocate($dst_img,80, 200, 120),
             imagecolorallocate($dst_img,222, 49, 99),
             imagecolorallocate($dst_img,128, 0, 0),
             imagecolorallocate($dst_img,255, 204, 0),
             imagecolorallocate($dst_img,128, 128, 0),
             imagecolorallocate($dst_img,0, 255, 128),
             imagecolorallocate($dst_img,0, 128, 128),
             imagecolorallocate($dst_img,0, 0, 128),
             imagecolorallocate($dst_img,75, 0, 128),
             imagecolorallocate($dst_img,255, 140, 105),
             imagecolorallocate($dst_img,218, 112, 214),
             imagecolorallocate($dst_img,255, 128, 51),
            ];

    //填入底色        
    imagefill($dst_img,0,0,$white);
    
    //建立一個開始繪製文字圖形的起始坐標，由邊框的厚度開始繪製
    $x_pointer=$border;

    //使用迴圈把驗證碼文字逐一寫入到圖片中
    foreach($text_info as $char => $info){
        
        //計算放置的y坐標範圍，字元的高度加上邊框起始點(5)及總高度-底部坐標終點的限制(5)
        $y=rand($info['height']+5,$info['height']+($border*2-5*2));

        // 這邊才真正開始畫
        //將字元依照【大小，角度，坐標，顏色，字型，內容】等資訊畫在畫布上
        imagettftext($dst_img,$fontsize,$info['angle'],$x_pointer,$y,$colors[rand(0,count($colors)-1)],realpath('./fonts/arial.ttf'),$char);

        //依照字元的寬度及字元的x坐標來產生下一個字元的x坐標起點
        // +1=>往旁邊移一格
        $x_pointer=$x_pointer+$info['width']+$info['x']+1;
    
    }

    //建立一個線條範圍亂數，決定圖形驗證碼上的干擾線數量
    $lines=rand(3,6);

    //使用迴圈來產生每一條干擾線
    for($i=0;$i<$lines;$i++){

        //使用亂數來產生起點x坐標，限定範圍為5開始到邊框厚度—5*2之間
        $left_x=rand(5,$border-(5*2));
        
        //使用亂數來產生起點y坐標，限定範圍為5開始到總高度—5之間
        $left_y=rand(5,$base_h-5);

        //使用亂數來產生終點x坐標，限定範圍為邊框厚度開始到邊框厚度—5*2之間
        $right_x=rand($base_w-$border+5,$base_w-5);

        //使用亂數來產生終點y坐標，限定範圍為5開始到總高度—5之間
        $right_y=rand(5,$base_h-5);

        //根據計算出來的起點和終點坐標來畫出干擾線
        imageline($dst_img,$left_x,$left_y,$right_x,$right_y,$colors[rand(0,count($colors)-1)]);
    }
    
    //開啟輸出緩衝區(output buffer)
    ob_start();

    //產生png格式的圖片，此時會先暫時存放在緩衝區中不送出去
    imagepng($dst_img);

    //將緩衝區中的圖形圖片資料取回來指定給變數$output
    $output = ob_get_clean();

    //刪除處理完畢的圖形資源資料
    imagedestroy($dst_img);

    //使用base64的方式把緩衝區中的二進位圖形資料轉成base64的字串格式回傳出去
    //前方的data:image/png:base64, 是資料格式的宣告,讓瀏灠器可以知道這一段文字的功能是什麼
    return "data:image/png;base64," . base64_encode($output);

}



function captcha_article($str){
    $gstr=$str;

    //定義字型大小
    $fontsize=25;

    //建立一個陣列用來儲存每一個字元的圖形資訊
    $text_info=[];

    //建立兩個變數用來計算所有字元的總寬度及最大高度
    $dst_w=0;
    $dst_h=0;

    //使用迴圈來逐一分析每個字元的圖形資訊
    for($i=0;$i<mb_strlen($gstr);$i++){

        //使用mb_substr()順序取出每一個字元
        $char=mb_substr($gstr,$i,1);

        //使用亂數產生一個正負之間的傾斜的角度
        $text_info[$char]['angle']=rand(-25,25);

        //使用imagettfbbox()來取得單一字元在大小,角度和字型的影響下，字元圖形的四個角的坐標資訊陣列
        $tmp=imagettfbbox($fontsize,$text_info[$char]['angle'],realpath('../fonts/arial.ttf'),$char);

        //利用字元的資訊，使用x坐標的最大值減最小值來計算出字元寬度，使用y坐標的最大值-最小值來計出字元高度
        //因坐標特性，需要加上1才能得到正確的寬度及高度
        $text_info[$char]['width']=max($tmp[0],$tmp[2],$tmp[4],$tmp[6])-min($tmp[0],$tmp[2],$tmp[4],$tmp[6])+1;
        $text_info[$char]['height']=max($tmp[1],$tmp[3],$tmp[5],$tmp[7])-min($tmp[1],$tmp[3],$tmp[5],$tmp[7])+1;

        //累加每個字元的寬度來計算總寬度
        $dst_w+=$text_info[$char]['width'];

        //比較每一次字元的高度來決定最大高度
        $dst_h=($dst_h>=$text_info[$char]['height'])?$dst_h:$text_info[$char]['height'];

        //根據字型的資訊來取得字元的左上角坐標
        $text_info[$char]['x']=min($tmp[0],$tmp[2],$tmp[4],$tmp[6]);
        $text_info[$char]['y']=min($tmp[1],$tmp[3],$tmp[5],$tmp[7]);
    }
    
    //建立一個邊框的厚度變數
    $border=10;

    //使用計算出來的總寬度和最大高度加上邊框厚度來計算驗證碼圖形的完整寬高
    $base_w=$dst_w+($border*2);
    $base_h=$dst_h+($border*2);

    //根據計算出來的驗證碼圖形完整寬高來建立一個全彩圖形資源
    $dst_img=imagecreatetruecolor($base_w,$base_h);

    //顏色定義區
    $white=imagecolorallocate($dst_img,255,255,255);
    $black=imagecolorallocate($dst_img,0,0,0);
    $blue=imagecolorallocate($dst_img,0,0,255);
    $red=imagecolorallocate($dst_img,255,0,0);
    $green=imagecolorallocate($dst_img,0,255,0);

    //顏色陣列
    $colors=[imagecolorallocate($dst_img,255, 127, 80),
             imagecolorallocate($dst_img,204, 85, 0),
             imagecolorallocate($dst_img,184, 115, 51),
             imagecolorallocate($dst_img,204, 119, 34),
             imagecolorallocate($dst_img,112, 66, 20),
             imagecolorallocate($dst_img,80, 200, 120),
             imagecolorallocate($dst_img,222, 49, 99),
             imagecolorallocate($dst_img,128, 0, 0),
             imagecolorallocate($dst_img,255, 204, 0),
             imagecolorallocate($dst_img,128, 128, 0),
             imagecolorallocate($dst_img,0, 255, 128),
             imagecolorallocate($dst_img,0, 128, 128),
             imagecolorallocate($dst_img,0, 0, 128),
             imagecolorallocate($dst_img,75, 0, 128),
             imagecolorallocate($dst_img,255, 140, 105),
             imagecolorallocate($dst_img,218, 112, 214),
             imagecolorallocate($dst_img,255, 128, 51),
            ];

    //填入底色        
    imagefill($dst_img,0,0,$white);
    
    //建立一個開始繪製文字圖形的起始坐標，由邊框的厚度開始繪製
    $x_pointer=$border;

    //使用迴圈把驗證碼文字逐一寫入到圖片中
    foreach($text_info as $char => $info){
        
        //計算放置的y坐標範圍，字元的高度加上邊框起始點(5)及總高度-底部坐標終點的限制(5)
        $y=rand($info['height']+5,$info['height']+($border*2-5*2));

        // 這邊才真正開始畫
        //將字元依照【大小，角度，坐標，顏色，字型，內容】等資訊畫在畫布上
        imagettftext($dst_img,$fontsize,$info['angle'],$x_pointer,$y,$colors[rand(0,count($colors)-1)],realpath('../fonts/arial.ttf'),$char);

        //依照字元的寬度及字元的x坐標來產生下一個字元的x坐標起點
        // +1=>往旁邊移一格
        $x_pointer=$x_pointer+$info['width']+$info['x']+1;
    
    }

    //建立一個線條範圍亂數，決定圖形驗證碼上的干擾線數量
    $lines=rand(3,6);

    //使用迴圈來產生每一條干擾線
    for($i=0;$i<$lines;$i++){

        //使用亂數來產生起點x坐標，限定範圍為5開始到邊框厚度—5*2之間
        $left_x=rand(5,$border-(5*2));
        
        //使用亂數來產生起點y坐標，限定範圍為5開始到總高度—5之間
        $left_y=rand(5,$base_h-5);

        //使用亂數來產生終點x坐標，限定範圍為邊框厚度開始到邊框厚度—5*2之間
        $right_x=rand($base_w-$border+5,$base_w-5);

        //使用亂數來產生終點y坐標，限定範圍為5開始到總高度—5之間
        $right_y=rand(5,$base_h-5);

        //根據計算出來的起點和終點坐標來畫出干擾線
        imageline($dst_img,$left_x,$left_y,$right_x,$right_y,$colors[rand(0,count($colors)-1)]);
    }
    
    //開啟輸出緩衝區(output buffer)
    ob_start();

    //產生png格式的圖片，此時會先暫時存放在緩衝區中不送出去
    imagepng($dst_img);

    //將緩衝區中的圖形圖片資料取回來指定給變數$output
    $output = ob_get_clean();

    //刪除處理完畢的圖形資源資料
    imagedestroy($dst_img);

    //使用base64的方式把緩衝區中的二進位圖形資料轉成base64的字串格式回傳出去
    //前方的data:image/png:base64, 是資料格式的宣告,讓瀏灠器可以知道這一段文字的功能是什麼
    return "data:image/png;base64," . base64_encode($output);

}