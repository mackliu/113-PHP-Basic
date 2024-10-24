<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期</title>
</head>
<body>
<h1>給定兩個日期，計算中間間隔天數</h1>
<?php 
date_default_timezone_set("Asia/Taipei");

echo date("Y/m/d H:i:s");
echo "<br>";

$start ="2024-10-01";
$end="2024-10-30";
$startTime=strtotime($start);
echo '開始時間:'.$startTime;
echo "<br>";
$endTime=strtotime($end);
echo '結束時間:'.$endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo '差距秒:'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo "間隔:".$days;
echo "<br>";
/* $s=86400;
echo $s*29; */


?>
<h1>計算距離自己下一次生日還有幾天</h1>
<?php 
$start =date("Y-m-d");
$end="2025-10-07";
$startTime=strtotime($start);
echo '今日日期:'.$startTime;
echo "<br>";
$endTime=strtotime($end);
echo '下次生日:'.$endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo '差距秒:'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo "距下次生日還有:".$days ."天";
echo "<br>";
?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>