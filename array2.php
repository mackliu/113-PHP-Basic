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


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>