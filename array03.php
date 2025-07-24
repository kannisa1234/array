<!DOCTYPE html>
<html>
<body>

<?php

$numberString = "0814563972";

$numberText = array(
    '0' => "ศูนย์",
    '1' => "หนึ่ง",
    '2' => "สอง",
    '3' => "สาม",
    '4' => "สี่",
    '5' => "ห้า",
    '6' => "หก",
    '7' => "เจ็ด",
    '8' => "แปด",
    '9' => "เก้า"
);

$result = "";
for ($i = 0; $i < strlen($numberString); $i++) {
    $digit = $numberString[$i];
    $result .= $numberText[$digit]; 
}

echo $numberString . " => " . $result;
?>


</body>
</html>
