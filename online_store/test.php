<?php
// 假设 $now 和 $pages 是你的页码变量
$now = 3;
$pages = 10;

// 计算是否应该隐藏中间的页码
$hideMiddlePages = ($now == $pages) ? 'hidden' : '';
print_r($hideMiddlePages);
// 输出页码
for ($i = 1; $i <= $pages; $i++) {
    // 根据条件应用隐藏样式
    $hideStyle = ($hideMiddlePages != '' && $i > 1 && $i < $pages) ? 'style="display: none;"' : '';

    // echo "<span $hideStyle>$i</span>";
}
?>
