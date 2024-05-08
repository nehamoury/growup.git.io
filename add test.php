<!DOCTYPE html>
<?php
session_start();
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kaushan+Script&family=Yeseva+One&display=swap"rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
 <style>
          body {
            color: black;

        }

        .table td {
            border: none !important;
            border-right: solid 1px #ccc
        }

        .table th {
            border: none !important;
            border-right: solid 1px #ccc;

        }

        .table {
            margin-top: 40px;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            margin-left:50px;
            font-weight: bold;
        }

        
         h1 {
            text-align: center;
            font-family: 'Kaushan Script', cursive;
            font-weight: bolder;

            text-shadow: 3px 1px 1px darkred;
        }
        

        .form-control {
            background: transparent;
            border-radius: 50px;


        }

        .btn {
            height: 50px;
            width: 150px;
            margin-top: 10px;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            color: white;
            font-weight: bold;
            font-size: 15px;
            border: 2px white;
          
        }

        .btn:hover {
            background: rgb(131, 58, 180);
            background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
        }

        .navbar-brand {
            font-weight: bolder;
            font-family: 'Kaushan Script', cursive;
            text-shadow: 3px 1px 1px darkred;
            word-spacing: 20px;
            font-size: 55px;
            padding-left: 250px;
            padding-top: 40px;
        }

        .navbar {
            height: 80px;
            border-bottom: none;
            background-color: white;
        }

        .c {
            margin-left: 60px;
            font-size: 20px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 38px;
            color: blue;
            font-family: Times New Roman, Times, serif;

        }

        .nav {
            color: blue;
            margin-left: 250px;
        }

        .nav:hover {
            color: red;
        }

        .pic {
            margin-top: 80px;
            height: 300px;
            width: 300px;
            text-align: center;
            box-shadow: 5px 5px 20px black;
            border-radius: 50%;
            transition: 0.3s;
        }

        .pic:hover {

            margin-top: 80px;
            height: 315px;
            width: 315px;
            text-align: center;
            box-shadow: 5px 5px 20px black;
            border-radius: 50%;
        }


        h3 {
            text-align: center;
            font-weight: bold;
        }

        .nj {
            font-weight: bolder;
            padding-top: 100px;
            font-size: 60px;
            text-shadow: 3px 1px 5px black;
            color: white;
            font-family: 'Koulen', cursive;
            letter-spacing: 8px;
        }

        .nk {
            color: white;
            font-size: 25px;
            text-align: center;
            font-family: Times New Roman, Times, serif;
            text-shadow: 3px 1px 5px black;
        }
 .x
 {
    width: 300px;
 }

 </style>  
</head>
<body>
<body>
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#" style="color:black;">GROW UP.</a>
                    </div>
                    <ul class="nav navbar-nav">
                    <li><a href="workplace.php" class="c">BACK</a></li>
                        <li><a href="starting.php" class="c">HOME</a></li>
                        <li><a href="#" class="c">ABOUT</a></li>
                        <li><a href="logout.php" class="c">LOGOUT</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Background image -->
            <div class="p-5 text-center bg-image"
                style="background-image: url('https://leapintohope.org/wp-content/uploads/2019/10/children-at-school.jpg'); height: 500px;">

                <div class="mask" style="color:white;">
                    <div class="d-flex">
                        <div class="text-white" align="center">
                            <h1 class="nj mb-3">
                                GROW UP. TUTORIAL CLASSES</h1>

                            <p class="nk mb-3" style=" ">Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>
                                Officia sit voluptate error beatae natus dolore, iste ullam provident expedita <br>
                                dicta maiores deserunt minus repudiandae dolorum architecto, nemo quasi cupiditate
                                distinctio!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <form method="POST">
    <div class="row">
        <div class="col-md-2">
    </div>
    <div class="col-md-8"> 
            <div class="containe">
         <div class="card">
     <h1>ENTER THE QUESTION</h1>
    
    <table>
        <tr>
            <th>QUESTION</th>
    <td><input type="text" name="t1"class="form-control"></td>
    </tr>
        
    <tr>
            <th>OPTION-FIRST</th>
    <td><input type="text" name="t2"class="form-control"></td>
    </tr>
        
    <tr>
            <th>OPTION-SECOND</th>
    <td><input type="text" name="t3"class="form-control"></td>
    </tr>
        
    <tr>
            <th>OPTION-THIRD</th>
    <td><input type="text" name="t4"class="form-control"></td>
    </tr>
        
    <tr>
            <th>OPTION-FOUR</th>
    <td><input type="text" name="t5"class="form-control"></td>
    </tr>
        
    <tr>
            <th>ANSWER</th>
    <td><input type="text" name="t6"class="form-control"></td>
    </tr>
        
    </table>
    <input type="submit" value="submit">
    
    
    </div>
    </div>
    </div>
    </form>
    <div clas="col-md-2">
    </div>
    
    </div>
    <?php
    if (isset($_SESSION['u']) == false) {
        echo "<script>
    window.location='teacher.php'
    </script>";
    }
    $a = $_SESSION['u'];

    ?>
    </body>
    <?php
     
     
      if(isset($_POST['t1']))
     {
        $a=$_POST['t1'];
        $b=$_POST['t2'];
        $c=$_POST['t3'];
        $d=$_POST['t4'];
        $e=$_POST['t5'];
        $f=$_POST['t6'];
     
    
    $con=mysqli_connect('localhost','root','','growup');
    $in="insert into exam values('null','$a','$b','$c','$d','$e','$f')";
    
    $q=mysqli_query($con,$in);
    
    if($q)
    {
       echo"sucess";
    }
    else
    { 
       echo"error";
    }
    }
    
    ?>
    </html>
</body>
</html>