<?php
     session_start();
     $n=$_SESSION['u'];
     $b=$_SESSION['p'];
     $m=$_POST['k1'];
     $g=$_POST['k2'];



     $con=mysqli_connect("localhost","root","","growup");

    
     $in="insert into chat values('null','$m','$n','$g' )";
     

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