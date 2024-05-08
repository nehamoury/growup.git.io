<!DOCTYPE html>
<html lang="">
<?php
  session_start();
  ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kaushan+Script&family=Yeseva+One&display=swap"
        rel="stylesheet">
<style>
    .container {

    }

    body {
        margin: 0px;
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        color: white;

    }

    h1 {
        text-align: center;
        font-weight: bold;
        font-family: 'Kaushan Script', cursive;
    }

    table {
        font-size: 18px;
        font-weight: bold;
        border-spacing: 10px;

    }

    .sub {
        height: 50px;
        width: 110px;
        margin-left: 40%;
        margin-top: 10px;
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        color: white;
        font-weight: bold;
        font-size: 15px;
        border: none;

    }
    .sub:hover{
        background: rgb(131,58,180);
background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
    }

    input {
        height: 29px;
        width: 280px;
        border-radius: 50px;
        background: transparent;
       border-color: white;
       color: white;
    }
    
</style>

<head>

</head>

<body>
<form method="post">
    <div class="container">
        <h1>LOGIN</h1>
        <table align="center">
            <tr>
                <td>ROLL NO.</td>
            </tr>
            <tr>
                <td> <i class="fa fa-user icon"></i><input type="text" name="t1"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
            </tr>
            <tr>
                <td> <i class="fa fa-key icon"></i><input type="text" name="t2"></td>
            </tr>
        </table>
        <input type="submit" value="LOGIN" class="sub">
        <div>
        </form>
        <?php
            if(isset($_POST['t1']))
            {
                $a=$_POST['t1'];
                $b=$_POST['t2'];
                $c=0;
                $con=mysqli_connect("localhost","root","","growup");
                $sel="select * from details";
                $rs=mysqli_query($con,$sel);
                while($row=mysqli_fetch_array($rs))
                {
                    if($row['id']==$a && $row['password']==$b)
                    {
                        $c++;
                    }
                }
                if($c==0)
                {
                    echo"invalid";
                }
                else{
                     $_SESSION['p']=$a;
                  
                 echo"<script>parent.document.location.href='student page.php'</script>";
                 echo"<script>parent.jQuery.fancybox.close();</script>";
                
                }
            }
            ?>
</body>

</html>