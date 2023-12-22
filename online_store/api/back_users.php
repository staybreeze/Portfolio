<!-- 無圖 -->

<?php
include_once "db.php";

// 檢查是否存在 'id' 並且是陣列
if (isset($_POST['id']) && is_array($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        // 檢查 'id' 是否存在並且是有效值
        if (isset($id)) {
            if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
                $User->del($id);
            } else {
                $row = $User->find($id);
                if (isset($row['acc'])) {
                    // 確保在使用 'acc', 'pw', 'name', 'address', 'email' 之前它們是存在的
                    $row['acc'] = isset($_POST['acc'][$key]) ? $_POST['acc'][$key] : '';
                    $row['pw'] = isset($_POST['pw'][$key]) ? $_POST['pw'][$key] : '';
                    $row['name'] = isset($_POST['name'][$key]) ? $_POST['name'][$key] : '';
                    $row['address'] = isset($_POST['address'][$key]) ? $_POST['address'][$key] : '';
                    $row['email'] = isset($_POST['email'][$key]) ? $_POST['email'][$key] : '';
                }

                $User->save($row);
            }
        }
    }
}

if (!isset($row['id'])) {
    // 確保在使用 'acc', 'pw', 'name', 'address', 'email' 之前它們是存在的
    $row['acc'] = isset($_POST['acc'][$key]) ? $_POST['acc'][$key] : '';
    $row['pw'] = isset($_POST['pw'][$key]) ? $_POST['pw'][$key] : '';
    $row['name'] = isset($_POST['name'][$key]) ? $_POST['name'][$key] : '';
    $row['address'] = isset($_POST['address'][$key]) ? $_POST['address'][$key] : '';
    $row['email'] = isset($_POST['email'][$key]) ? $_POST['email'][$key] : '';
}

$User->save($row);
header("location:../back/users.php?do=users")
?>
