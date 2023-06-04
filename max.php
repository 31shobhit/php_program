<html>
<head>
    <title> Maximum of three numbers </title>
</head>
<body>
    <form method="post"><br>
        Enter your first number : <br>
        <input type="text" name= "n1">
        Enter your second number : <br>
        <input type="text" name= "n2">
        Enter your third number : <br>
        <input type="text" name= "n3"><br>
        <input type="submit" name ="submit">
    </form>
    <?php
    if($_POST)
    {
        $num1=$_POST["n1"];
        $num1=$_POST["n2"];
        $num1=$_POST["n3"];
     if($num1>$num2 && $num1>$num3)
     {
        echo $num1;

     }
     else
     if($num2>$num1 && $num2>$num3)
     {
        echo $num2;
     }
     else
     {
         echo $num3;
     }
    }
    ?>
</body>
</html>