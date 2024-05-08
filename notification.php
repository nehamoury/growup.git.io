<?php
$a=$_POST['notifi'];

$con=mysqli_connect('localhost','root','','growup');
$sel="insert into notification values('null','$a')";
$q=mysqli_query($con,$sel);
if($q)
{
   echo"<p style='color:red;'>Success !</p>";
}
else
{
   echo"<p style='color:red;'>Error :(</p>";
}

?>
