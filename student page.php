<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kaushan+Script&family=Yeseva+One&display=swap"
    rel="stylesheet">

  <style>
    .navbar-brand {
      font-weight: bolder;
      font-family: 'Kaushan Script', cursive;
      text-shadow: 3px 1px 1px darkred;
      word-spacing: 20px;
      font-size: 55px;
      padding-left: 20px;
      padding-top: 20px;

    }

    .navbar {

      background-color: #fde3e9;
      background: transparent;
      border-bottom: none;
    }

    h1 {
      margin-top: 50px;
    }

    .c {
      margin-left: 60px;
      font-size: 20px;

      margin-top: 10px;

      border-radius: 0;
      background-color: ;
      font-family: Times New Roman, Times, serif;

    }

    body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: black;
    }

    h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
    }

    .jumbotron {
      background-image: url("https://edindia.org/wp-content/uploads/2023/02/fxg.jpg");

      color: black;
      opacity: 1.0;
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      background-size: cover;
    }

    .jumbotron {
      background-color: white;
      padding: 100px 15px;
      font-family: Montserrat, sans-serif;
      opacity: 1.0;
    }

    .container {
      width: 220px;
      padding-right: 80px;
    }

    .col-md-12 {
      background-color: #00004d;
      height: 400px;
      width: 100%;
      margin-top: 50px;


    }

    h5 {

      color: white;
      font-size: 25px;
      margin-top: 0;

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
      text-align: center;
    }

    .btn:hover {
      background: rgb(131, 58, 180);
      background: linear-gradient(90deg, rgba(131, 58, 180, 1) 50%, rgba(252, 176, 69, 1) 100%);
    }


    table {
      margin-top: 30px;
      border-radius: 14px;
      font-family: "Times New Roman", Times, serif;


    }

    .header {
      margin-left: 40px;
    }

    .pic {
      font-size: 30px;
      padding: 5px;
      text-align: center;
    }

    .pi {
      padding-left: 25px;

    }

    input {
      background: transparent;
      color: white;
      height: 40px;
      width: 250px;
      border: 1px solid #2d566b;
      border-radius: 0.5rem;
    }

    .open-button {
      background-color: green;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 280px;
    }

    /* The popup chat - hidden by default */
    .chat-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }

    /* Full-width textarea */
    .form-container textarea {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
      resize: none;
      min-height: 100px;
    }

    /* When the textarea gets focus, do something */
    .form-container textarea:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/send button */
    .form-container .btn {
      background-color: #04AA6D;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
      opacity: 1;
    }

    .col-sm-12 {
      background-color: rgb(180, 180, 180);

    }

    .head {
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

    .x {
      overflow: scroll;
      height: 200px;
      background-color: white;
      background: Transparent;

      font-variant: small-caps;

    }
  </style>

</head>

<body>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar">
      <div class="container1">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage" style="color:black;">GROW UP.</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">


            <li><a href="growup page.php" class="c">Home</a></li>
            <li><a href="#about" class="c">About</a></li>



            <li><a href="#contact" class="c">Contact</a></li>
            <li><a href="logout.php" class="c">LogOut</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron text-center">
      <h1 style="color:white;"> GROW UP. TUTORIAL CLASSES</h1>
      <p style="font-weight: bolder; color:white">"Empowering Dreams Through Knowledge: Unleashing Your Potential at Our
        Coaching Institute.
        Join us to embark on a transformative learning journey guided by expert mentors and innovative teaching
        techniques</p>
    </div>
    <br>
    <br>
    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <h2 style="font-weight:bolder;">About Our Institute</h2>
          <p> A coaching institute is an educational center that offers specialized instruction and guidance to
            students seeking to enhance their academic or professional skills. These institutes provide structured
            courses, study materials, and expert tutors to help students excel in various subjects, entrance exams,
            or skill-based certifications. Through personalized teaching methods and targeted curriculum, coaching
            institutes aim to foster a deeper understanding of subjects and boost confidence. They often play a crucial
            role in preparing students for competitive exams and academic challenges, enabling them to achieve their
            educational and career goals effectively. </p><br>

          <div class="container">

            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
              style="margin-left:">notification</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">notification</h4>
                  </div>
                  <form method="post">
                    <div class="modal-body">
                      <?php
                      $con = mysqli_connect("localhost", "root", "", "growup");
                      $sel = "select * from notification order by num desc";
                      $rs = mysqli_query($con, $sel);

                      while ($row = mysqli_fetch_array($rs)) {
                        echo "
    $row[num]-
    
        $row[data]<br>";

                      }

                      ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="container">

            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:400px;">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="https://th.bing.com/th/id/OIP.pvpDSHfSKuVJWK7jTnyjcQHaE8?pid=ImgDet&w=640&h=427&rs=1">
                </div>

                <div class="item">
                  <img src="https://th.bing.com/th/id/OIP.8iLW1rKoD5D9Z8OR2uhVvgHaE8?pid=ImgDet&w=1200&h=800&rs=1"
                    alt="Chicago">
                </div>

                <div class="item">
                  <img src="https://www.careforkids.com.au/image/centrethumbnail/34893?w=535&h=468&q=90">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="row">


      <div class="col-sm-1"></div>
      <div class="col-sm-4">
        <img
          src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2019/10/attachment_74243024-e1570748962600.jpeg?auto=format&q=60&fit=max&w=930"
          style="height:550px;width:450px;">
      </div>

      <div class="col-sm-6">
        <h1 style="font-weight:bolder;">Why is education important?</h1>
        <p>
          Deep down, every good teacher knows the impact and importance of education. It isn’t just about learning
          reading,
          writing and arithmetic at school. Instead, formal education is about gaining the knowledge and the skills
          needed to
          become a better person and create a better society to live in.
          For the navigation, think about things that parents care most about. For example, the
          best education website design solutions will have an easily accessible calendar feature.
          It sounds obvious, but actually, the calendar is often overlooked. Plain and simple: it’s truly one of
          the most important features for parents who need to know about breaks,
          holidays, exams and school-wide events.</p>
        <p>I remember my first teacher. I remember the teachers I had throughout primary school, and some of the faces
          of the teachers I had in Nursery school.

          I remember them for their kindness and the fun they brought to my life (yes, I found school fun). But I
          remember them most for the change they brought to me. A woman named Mrs. Dade taught me the value of math. A
          teacher named Ms. Lennon taught me to read. A teacher named Mr. Elder taught me about US History when I was in
          4th grade and I still quote his class in discussions about the US Civil War.

          These teachers changed me through their work. Education turned me from a boy who was obsessed with playing
          sports outside into an avid reader who loved “beating” the math problems put in front of me.

          Teachers are the foundations of societies because their trade is the lifeblood of humanity. Education shapes
          minds, lives, communities and the world.

          A run-in with a friend who became a teacher recently had me reflecting on this truth, and so I wanted to see
          the truth of education through the eyes of leaders in history.</p>

        <br><a href="view attendance.php"> <button class="btn btn-default btn-lg">view attandance</button></a>



      </div>
    </div>

    <div class="col-md-12">

      <h1 style="color:white; text-align:center;">We're Good With Numbers</h1>

      <h1 style=" text-align:center;font-size:80px; color:white;word-spacing: 2em; font-weight:bold;">15. 36.</h1>
      <h5 style="text-align:center; ">Year Of Experience &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Qualified Experts
      </h5>

    </div>

    <div id="services" class="row">
      <div class="col-sm-1"></div>

      <div class="col-sm-5">
        <h1 style="font-family: 'Cinzel', serif;font-size:40px;">Here You Can View Your Notes:</h1>
        <p>"Behold the panoramic canvas of nature's masterpiece, where every horizon unveils a new
          chapter of beauty waiting to be explored."</p>
        <br><a href="view note.php"> <button class="btn btn-default btn-lg">veiw Notes</button></a>
      </div>


      <div class="col-sm-4">
        <h1 style="font-family: 'Cinzel', serif;font-size:40px;">Start Test:</h1>
        <p>"Tests: where knowledge transforms into action, and understanding meets challenge.
          Each question is a chance to shine a light on your expertise, weaving intellect with intuition.
          Embrace the journey, for within these moments of inquiry, you define your comprehension and unveil your
          potential."
          <br>


          <!-- Button to Open the Modal -->
          <a href="test1.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Start Test
            </button></a>



        </p>


      </div>
      <div class="col-sm-2"></div>

    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-7">

        <h1 style="font-family: 'Cinzel', serif;font-size:40px;">How social media affects the education:</h1>
        <p>Positive: Social media enhances education by providing easy access to information, global
          collaboration, interactive learning, and resource sharing, fostering a dynamic and enriched educational
          experience.

          Negative: Conversely, social media's distractions can hamper focus, misinformation can undermine accuracy,
          privacy concerns may arise, face-to-face interaction might suffer, and cyberbullying may negatively impact
          mental health, all potentially affecting students' overall learning and well-being.</p>
        <a href="#" style="color :red;">Read More</a>
      </div>

      <div class="col-sm-4">
        <button class="open-button" onclick="openForm()">Chat</button>

        <div class="chat-popup" id="myForm">
          <form class="form-container">
            <h1 style="font-size:20px;">HOW CAN I HELP YOU?</h1>

            <label for="msg"><b>Message</b></label>
            <div class="x"> </div>
            <textarea placeholder="Type message.." name="msg" id="t1"></textarea>

            <button type="submit" class="btn" id="b1">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
      </div>
    </div><br><br>
    <script src="jQuery v3.7.0.min.js"></script>
    <script>


      $(document).ready(function () {
        setInterval(function () {
          $.post('show chat2.php', {}, function (data) {
            $(".x").html(data)
          });
        }, 1000);

        $("#b1").click(function () {

          $.post('backend2.php', { k1: $("#t1").val() }, function (data) {
            alert(data);

          });
        });
      });


      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>
    <div class="row">
      <div class="col-sm-12">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <img
            src="https://www.sra-architecture.co.uk/wp-content/uploads/2021/06/SRA_WestBridgfordSchool_008_A_compressed-scaled-e1624617874530-1024x678.jpg"
            style="height:400px;">
        </div>
        <div class="col-sm-6">
          <h4 style="font-size:45px; margin-top:50px;">Career<h4><br><br>
              <p>"A career is a lifelong journey of professional growth and fulfillment.
                It encompasses one's chosen path, aspirations, and achievements.
                Navigating a career involves continuous learning, adapting to change,
                and aligning passions with opportunities to create a meaningful and successful vocational trajectory."
              </p>
              <br><a href="#" style="color:red;"> Read More</a>
        </div>
      </div>
    </div>
    <br>
    <br>
    <footer class="footer">
      <div class="head">
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
            <h4>contact</h4>
            <div id="contact" class="footer-col">

              <ul>
                <li><a href="#">groupclasses@gmail.com</a></li>
                <li><a href="#">mo.1234567891</a></li>
                <li><a href="#">Branch- bhilai</a></li>

              </ul>
            </div>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php
    if (isset($_SESSION['p']) == false) {
      echo "<script>
    window.location='starting.php'
    </script>";
    }
    ?>



  </body>

</html>