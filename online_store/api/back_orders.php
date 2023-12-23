<?php
include_once "db.php";

$users = $User->all();
$numbers = $_POST['number'];  // 數量的陣列
$productNames = $_POST['name'];  // 產品名稱的陣列

foreach ($users as $user) {
    $cartItems = $Customer->all(['customer_acc' => $user['acc']]);
    echo "<br>";

    foreach ($cartItems as $cartItem) {
        $productName = $cartItem['product_id'];

        // 檢查是否存在對應的產品名稱
        if (in_array($productName, $productNames)) {
            // 使用 array_search 找到對應的索引
            $productIndex = array_search($productName, $productNames);
            echo "<br>";

            // 使用對應的索引取得 quantity
            $quantity = $numbers[$productIndex];

            $customerResult = $Customer->update(
                $cartItem['id'],
                [
                    'quantity' => $quantity,
                    'name' => $cartItem['name'],
                    'price' => $cartItem['price'],
                    'customer_acc' => $cartItem['customer_acc'],
                    'product_id' => $cartItem['product_id']
                ],
                ['product_id' => $productName] // 加入條件以確保更新正確的產品
            );
        }
    }
}

echo "<pre>";
print_r($_POST['number']);
echo "</pre>";
echo "<pre>";
print_r($_POST['name']);
echo "</pre>";

header('location:../back/orders.php?do=orders')
?>
