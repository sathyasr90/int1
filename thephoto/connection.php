<?php



$con=new mysqli("localhost","root","","testdb");
    
    
    
    if ($con->connect_error)
    {
        echo  $con->connect_error;
        die("sorry the database connection failed");
    }
    else
    {
        
    }
    
    
    
    ?>