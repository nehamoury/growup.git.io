<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php
    session_start();


    if(ISSET($_SESSION["p"])){

      $u=$_SESSION["p"];
    }
    else{

    $u=$_POST["k1"];
    }

  $con=mysqli_connect('localhost','root','','growup');
  $sel="select * from chat where sendby='$u' or sentto='$u'";
  $q=mysqli_query($con,$sel);

  while($row=mysqli_fetch_array($q))
  {
      echo"
      $row[sendby]-
      
          $row[chat]<br>";

  }
    ?>

</body>
</html>