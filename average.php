<h3>Average of semester marks</h3>
<?php
function average(int $marks1,int $marks2,int $marks3, int $marks4)
{
    return ($marks1+$marks2+$marks3+$marks4)/4;
}
function average1(int $marks1,int $marks2)
{
    return ($marks1+$marks2)/2;
}
print average(68,40,79,99)."%"."<br>";
print average(60,48,70,96)."<br>";
print average1(90,40)."<br>";
print average1(94,87);
?>

