<?php
$n=50;
echo "n=".$n."<br>";
for($i=1;$i<=$n;$i=$i+2){
    echo $i;
    echo ",";

}
echo "<br>";

$n=50;
echo "n=".$n."<br>";
for($i=1;$i<=$n;$i++){
    echo $i *10 ;
    echo ",";

}

echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;
for($i=3;$i<=$n;$i++){
    $t=true;     
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }

    if($t==true){
        echo "$i ,";
    }

}
echo "<br>";
echo $count;
echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;
for($i=3;$i<=$n;$i++){
    $t=true;     
    for($j=2;$j<=$i/2;$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }

    if($t==true){
        echo "$i ,";
    }

}
echo "<br>";

echo $count;
echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;
for($i=3;$i<=$n;$i++){
    $t=true;     
    for($j=2;$j<=sqrt($i);$j++){
        if($i%$j==0){
            $t=false;
        }
        $count++;
    }

    if($t==true){
        echo "$i ,";
    }

}

echo "<br>";
echo $count;
echo "<br>";

$n=100;
echo "n=".$n."<br>";
$count=0;
for($i=3;$i<=$n;$i=$i+2){
    $t=true;     
    for($j=2;$j<=sqrt($i);$j++){
        if($i%$j==0){
            $t=false;
            break;
        }
        $count++;
    }

    if($t==true){
        echo "$i ,";
    }

}
echo "<br>";
echo $count;
?>
<h2>九九乘法表</h2>

<?php
echo "<table border=1>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo "$j x $i = ".($j*$i);
        echo "</td>";     
    }
    echo "</tr>";
}
echo "</table>";

?>
<style>
.nine{
    border-collapse:collapse;
    margin:20px;

}   
.nine td{
    border:1px solid #aaa;
    width:30px;
    height:30px;
    text-align: center;
} 
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:blue;
    color:white
}

</style>
<?php
echo "<table class='nine'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            echo ($j*$i);
        }

        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
<!-- table>tr*9>td*9 -->

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>