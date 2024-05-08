<!DOCTYPE html>
<html>
 
<body>


<?php
session_start();
 
    $r=$_SESSION['p'];
    $c=0;
    $con=mysqli_connect("localhost","root","","growup");
    echo $sel="select * from ans  where qid='$r'";
    $rs=mysqli_query($con,$sel);
    while($row=mysqli_fetch_array($rs))
    {
        $c++;
   }   
   
   if($c==0)
   {
    echo"<script>
    window.location='exam.php'
    </script>";    
   }

   else{
    echo"exam already given";
   }
?>