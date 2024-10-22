<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>

<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>
<?php

$nums=[];

while(count($nums)<6){
    $n=rand(1,38);

    if( !in_array($n, $nums)){
        $nums[]=$n;
    }    
}

foreach($nums as $num){
    echo "$num, ";
}

echo "<br>";
sort($nums);
foreach($nums as $num){
    echo "$num, ";
}

echo "<hr>";
echo join(", ",$nums) ;

?>
<h2>找出五百年內的閏年</h2>

<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>
<?php

$leap=[];

for($i=2024;$i<=2524;$i++){
    if($i % 4==0 && ($i % 100 != 0 || $i % 400 == 0)){
        $leap[]=$i;

    }
}

echo "<pre>";
print_r($leap);
echo "</pre>";


?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>