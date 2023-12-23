<?php
include_once "db.php";

// 假設你的表單提交的是 $_POST['number'] 和 $_POST['name']
$numbers = $_POST['number'];
$names = $_POST['name'];

// 迭代 numbers 陣列，取得每個數字
foreach ($numbers as $idx => $quantity) {
    // 取得相對應索引的商品名稱
    $name = $names[$idx];

    $users = $User->all();

    foreach ($users as $user) {
        $cartItems = $Customer->all(['customer_acc' => $user['acc']]);

        foreach ($cartItems as $cartItem) {
            $productId = $cartItem['product_id'];

            // 從資料庫中找出相對應的購物車項目
            $existingCartItem = $Customer->find(['customer_acc' => $user['acc'], 'product_id' => $name]);

            if (isset($existingCartItem)) {
                // 更新購物車項目的數量
                $customerResult = $Customer->update(
                    $existingCartItem['id'],
                    [
                        'quantity' => $quantity,
                        'name' => $existingCartItem['name'],
                        'price' => $existingCartItem['price'],
                        'customer_acc' => $existingCartItem['customer_acc'],
                        'product_id' => $existingCartItem['product_id']
                    ]
                );
            }
        }
    }
}

echo "<pre>";
print_r($_POST['number']);
echo "</pre>";


header('location:../back/orders.php?do=orders')

?>

