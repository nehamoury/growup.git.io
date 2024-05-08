<?php
     session_start();
     $b=$_SESSION['p'];
     $m=$_POST['k1'];



     $con=mysqli_connect("localhost","root","","growup");

    
     $in="insert into chat values('null','$m','$b','987654321' )";
     

     $q=mysqli_query($con,$in);

     if($q)
    {
        echo"sucsess";
    }
    else
    { 
        echo"error";
    }

    ?>