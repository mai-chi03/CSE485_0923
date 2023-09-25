<?php
$arrs = ['đỏ', 'trắng', 'cam', 'trắng'];

$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

$result = '';

for ($i = 0; $i < count($arrs); $i++) {
    $result .= "Màu " . $arrs[$i] . " là màu yêu thích của " . $names[$i];

    if ($i < count($arrs) - 1) {
        $result .= ", ";
    } else {
        $result .= ".";
    }
}

echo $result;
?>