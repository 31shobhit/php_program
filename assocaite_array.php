<html>
    <body>
        <?php
        $a_array=array("India"=>"New Delhi","Afghanisthan"=>"Kabul","Australia"=>"Canberra","Bangladesh"=>"Dhaka","Brazil"=>"Brasilia","China"=>"Beiging","France"=>"paris");
        $j=0;
        foreach($a_array as $key=>$value){
            $newarray[0][$j]=$key;
            $newarray[1][$j]=$value;
            $j++;
        }
        echo "<table border =1>";
        echo "<tr><th>Country</th><th>Capital</th></tr>";
        for($k=0;$K<$j;$k++)
        {
         echo "<tr><td>".$newarray[0][$k]."</td>";
         echo "<td>".$newarray[1][$k]."</td></tr>";
         
        }

        echo "</table>";
        ?>
    </body>
</html>