<!DOCTYPE html>
<html>
<body>

<?php

$files = array("img1", "img10", "img11", "img1-1", "img1-2", "IMG123");

echo "<b>ก่อนการเรียงลำดับ:</b><br>";
echo implode(", ", $files) . "<br><br>";

$sortFiles = $files;
sort($sortFiles);
echo "<b>หลังใช้ sort():</b><br>";
echo implode(", ", $sortFiles) . "<br><br>";

$natFiles = $files;
natcasesort($natFiles);
echo "<b>หลังใช้ natcasesort():</b><br>";
echo implode(", ", $natFiles);
?>


</body>
</html>
