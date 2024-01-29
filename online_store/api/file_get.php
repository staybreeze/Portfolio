<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once "db.php";


$location = isset($_GET['location']) ? $_GET['location'] : '';


// echo $location;

$url = 'https://data.moa.gov.tw/Service/OpenData/TransService.aspx?UnitId=QcbUEzN6E6DL';

// 获取远程数据
$data = file_get_contents($url);

// 尝试解析JSON数据
$decodedData = json_decode($data, true);

if ($decodedData !== null) {
  
    foreach ($decodedData as $item) {
        if ($item['animal_area_pkid'] === 2) {

            echo json_encode($decodedData);

        }
    
    }
   }
// echo json_encode($decodedData);

?>
