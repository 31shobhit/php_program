<?php
        date_default_timezone_set("Asia/Kolkata");  
        $h = date('G');

        if($h>=5 && $h<=11)
        {
            echo "<strong>Good morning</strong>";
        }
        else 
        if($h>=12 && $h<=15)
        {
            echo "<strong>Good afternoon</strong>";
        }
        else 
        if($h>=16 && $h<=20)
        {
            echo "<strong>Good evening</strong>";
        }
        else 
        if($h>=20 )
        {
        echo "<stong>Good night</stong>";
        }
?>  

