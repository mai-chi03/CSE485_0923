<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
   ];
   
   $firstElement = reset($numbers);
   $lastElement = end($numbers);
   $maxValue = max($numbers);
   $minValue = min($numbers);
   $sum = array_sum($numbers);
   asort($numbers);
   arsort($numbers);
   ksort($numbers);
   krsort($numbers);
   
   echo "Phần tử đầu tiên: " . $firstElement . "<br>";
   echo "Phần tử cuối cùng: " . $lastElement . "<br>";
   echo "Số lớn nhất: " . $maxValue . "<br>";
   echo "Số nhỏ nhất: " . $minValue . "<br>";
   echo "Tổng các giá trị: " . $sum . "<br>";
   echo "Mảng sau khi sắp xếp tăng giá trị: <br>";
   foreach ($numbers as $key => $value) {
       echo $key . " => " . $value . "<br>";
   }
   echo "Mảng sau khi sắp xếp giảm giá trị: <br>";
   foreach (array_reverse($numbers, true) as $key => $value) {
       echo $key . " => " . $value . "<br>";
   }