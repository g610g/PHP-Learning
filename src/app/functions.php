<?php


    $name = $_REQUEST['fname'];
    if (empty($name))
    {
        echo "the name is empty" . "<br>";
      
    }
    else
    {
        $name = trim($name);
        $name = stripslashes($name);
        $name = htmlspecialchars($name);
        echo "first name is {$name}";
        
    }


