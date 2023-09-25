<?php
$array = array(1, 2, 3, 4, 5);
$index = 2; // Phần tử thứ 3, vì mảng được đánh index từ 0

unset($array[$index]);

$array = array_values($array); // Đảm bảo key của mảng là tuần tự

print_r($array);
?>
