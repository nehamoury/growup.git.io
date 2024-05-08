<?php
session_start();


$qid=$_POST['k1'];
$b=$_POST['k2'];
$a=$_SESSION['p'];

$con = mysqli_connect('localhost','root','', 'growup');
$sel = "insert into ans values ('$qid','$b','$a')";
$q = mysqli_query($con, $sel);
{
    if($q)
    {
       echo"sucsess";
    }
    else
    {
       echo"error";
    }

}
?>