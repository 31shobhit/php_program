<h1>Greatest of three numbers</h1>
<?php
$num1=20;
$num2=30;
$num3=15;
if($num1 > $num2 && $num1 > $num3)
{
    echo "num1 is greatest : "." $num1";
}
else if($num2 > $num1 && $num2 > $num3)
{
    echo "num2 is greatest : "." $num2";
}
else
{
    echo "num3 is greatest  : "." $num3";
}
?>