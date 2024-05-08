<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kaushan+Script&family=Yeseva+One&display=swap"
        rel="stylesheet">

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

        .table{
        margin-top:40px;
       border-radius:14px;
        font-family: "Times New Roman", Times, serif;
        font-size:18px;
        max-width:500px;
        font-weight: bold;
        text-align: center;
        margin-left: 20%;
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




        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            background-color: #24262b;
            padding: 70px 0;

        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: -box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #000000;
            background-color: #ffffff;
        }

        /*responsive*/
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }

        .nft {
            height: 200px;
            width: 700px;
            margin-top: 20px;
            font-size: 20px;

        }

        .col-md-10 {
            height: 400px;
            text-align: center;
            margin-top: 50px;
            background-color: lightseagreen;
        }

        .col-md-4 {
            text-align: center;
        }

        .col-md-6 {
            text-align: center;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
            color: white;
            
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

        @media(max-width:600px) {
            .nj {
                font-size: 40px
            }

            .nk {
                font-size: 20px
            }

        }

        h2 {
            margin-top: 60px;
        }

        .col-md-5 {
            margin-top: 50px;
        }


        .footer {
            background-color: #24262b;
            padding: 70px 0;
            margin-top: 80px;
           
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: -box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #000000;
            background-color: #ffffff;
        }

        /*responsive*/
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }
        

    </style>

</head>

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
    <div class="row">
        
    <div class="col-md-6 animated-border">
     <form method="post">   

    <h2 style="color:#3385ff;"><b>ATTENDANCE REGISTER</b></h2>
        <table class="table table-borderless">
                     <tr>
                     <th>ROLL NO</tH><td><select name="a" class="form-control" style="width:300px;">
                    <?php
                    $con=mysqli_connect("localhost","root","","growup");
                    $sel="select * from details";
                    $main=mysqli_query($con,$sel);
                    while($row=mysqli_fetch_array($main))
                    {
                        echo"<option>$row[id]</option>";
                    }

                    ?>
                    </td>
                    </tr>
                    <tr>
                   <th>SUBJECT</th>
                   <td>
                     <select class="form-control" name="b" id="sel1" style="width:300px;">
                        <option>MATH</option>
                        <option>BIO</option>
                        <option>COMMERCE</option>
                       <option>ART</option>
                     </select>
                  </td>
                    </tr>
                    <tr>
                     <th>MONTH</th><td><input type="month" name="c" class="form-control" style="width:300px;"placeholder="MONTH" ></td>
                    </tr>
                    <tr>
                     <th>TOTAL CLASS</th><td><input type="text" name="d" class="form-control" style="width:300px;" placeholder="TOTAL CLASS"></td>
                    </tr> 
                    <tr>
                     <th>TOTAL ATTENDANCE</th><td><input type="text" name="e" class="form-control" style="width:300px;" placeholder="TOTAL ATTEND CLASSES"></td>
                    </tr>
                    <tr>
                    <td><input type="submit" value="SUBMIT" class="btn btn-primary btn-lg"></td>
                    </tr>
                </table>


                </div>
       
        <div class="col-md-5">
            <h2 style="font-weight:bolder;">About Our Institute</h2>
            <p> A coaching institute is an educational center that offers specialized instruction and guidance to
                students seeking to enhance their academic or professional skills. These institutes provide structured
                courses, study materials, and expert tutors to help students excel in various subjects, entrance exams,
                or skill-based certifications. Through personalized teaching methods and targeted curriculum, coaching
                institutes aim to foster a deeper understanding of subjects and boost confidence. They often play a
                crucial
                role in preparing students for competitive exams and academic challenges, enabling them to achieve their
                educational and career goals effectively. </p>
            
            <button class="btn btn-default btn-lg">Get in Touch</button>
<br>
            <p> <br>As a teacher, your role in a student’s life goes beyond providing a great education.
                You’re a leader, role model, coach, advisor and facilitator of positive growth. Since
                students spend so much of their time in your classroom, it’s up to you and your fellow
                educators to make school a positive and inspiring environment where children can do their best work and
                be their best selves.

                Displaying posters featuring motivational quotes for students is an excellent way to instantly
                transform your classroom into a more uplifting space. Famous authors, leaders, innovators and other
                figures have left us with so many wonderful epigraphs about learning and success to choose from. Once
                you’ve picked your favorite motivational quotes, you can use these to create your own inexpensive
                classroom posters.</p>

        </div>


    </div>
      </div>
      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">conditions</a></li>
                        <li><a href="#">works</a></li>
                        <li><a href="#">experince</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>extra courses</h4>
                    <ul>
                        <li><a href="#">c++</a></li>
                        <li><a href="#">css</a></li>
                        <li><a href="#">html</a></li>
                        <li><a href="#">java</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    </form>
    <?php
    if (isset($_SESSION['u']) == false) {
        echo "<script>
    window.location='teacher.php'
    </script>";
    }
    $a = $_SESSION['u'];

    ?>

<?php
         if(isset($_POST['a']))
         {
             $a=$_POST['a'];
             $b=$_POST['b'];
             $c=$_POST['c'];
             $d=$_POST['d'];
             $e=$_POST['e'];
             
             $con=mysqli_connect('localhost','root','','growup');
            $sel="insert into attendance  values('$a','$b','$c','$d','$e')";
             $q=mysqli_query($con,$sel);
        
             if($q)
             {
                echo"<h3 class='a' style='color:red;'>Sucsess</h3>";
             }
             else
             {
                echo"<h3 class='a' style='color:red;'>Error</h3>";
             }
         }

        ?>  
</body>

</html>