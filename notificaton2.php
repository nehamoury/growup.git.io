 
<?php
if(isset($_SESSION['p'])==false)
{
    echo"<script>
    window.location='student.php'
    </script>";
}

 

?>

<?php
$con=mysqli_connect("localhost","root","","growup");
$sel="select * from notification order by num desc";
$rs=mysqli_query($con,$sel);

while($row=mysqli_fetch_array($q))
{
    echo"
    $row[num]-
    
        $row[data]<br>";

}

     

   



?>


