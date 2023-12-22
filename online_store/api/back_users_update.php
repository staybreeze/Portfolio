<?php
include_once "db.php";

// 檢查是否存在 'id' 並且是陣列
if (isset($_POST['id']) && is_array($_POST['id'])) {

    foreach ($_POST['id'] as $key => $id) {
        // 檢查 'id' 是否存在並且是有效值
        if (isset($id)) {
            if (isset($_POST['admin'])) {
                // 如果是管理員操作，則使用 Admin 對象
                $row = $Admin->find($id);
                if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
                    $Admin->del($id);
                } else
                if (isset($row['acc'])) {
                    // 更新管理員數據
                    $row['acc'] = isset($_POST['acc'][$key]) ? $_POST['acc'][$key] : '';
                    $row['pw'] = isset($_POST['pw'][$key]) ? $_POST['pw'][$key] : '';
                    $row['name'] = isset($_POST['name'][$key]) ? $_POST['name'][$key] : '';

                    $Admin->save($row);
                }
            } else {
                // 非管理員操作，使用 User 對象
                $row = $User->find($id);
                if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
                    $User->del($id);
                } else
                if (isset($row['acc'])) {
                    // 更新用戶數據
                    $row['acc'] = isset($_POST['acc'][$key]) ? $_POST['acc'][$key] : '';
                    $row['pw'] = isset($_POST['pw'][$key]) ? $_POST['pw'][$key] : '';
                    $row['name'] = isset($_POST['name'][$key]) ? $_POST['name'][$key] : '';
                    $row['address'] = isset($_POST['address'][$key]) ? $_POST['address'][$key] : '';
                    $row['email'] = isset($_POST['email'][$key]) ? $_POST['email'][$key] : '';

                    $User->save($row);
                }
            }
        }
    }

    // 移到 foreach 循環外部
    if (isset($_POST['admin'])) {
        header("location:../back/admins.php?do=admins");
        exit;
    } else {
        header("location:../back/users.php?do=users");
        exit;
    }
}
?>
