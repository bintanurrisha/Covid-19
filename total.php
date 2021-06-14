<?php
$dataa=file_get_contents('https://api.covid19api.com/world/total');
$coronadataa= json_decode($dataa);
echo "<pre>";
print_r($coronadataa);
?>
