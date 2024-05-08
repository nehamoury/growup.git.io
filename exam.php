<!DOCTYPE html>
<?php
session_start();

?>

<head>

    <script src="jquery-3.7.0.mini.js"></script>

    <script>

        $(document).ready(function () {
            var qid;
            $(".x").click(function () {
              
                qid = $(this).val();

                $.post('maintest.php', { k1: qid }, function (data) {

                    $("#z").html(data);
                });
            });


            $("body").on('click', '.next', function () {
                qid++;
                $.post('maintest.php', { k1: qid }, function (data) {
                    $("#z").html(data);
                });
            });

            $("body").on('click', '.pre', function () {
                qid--;
                $.post('maintest.php', { k1: qid }, function (data) {
                    $("#z").html(data);
                });
            });

            $("body").on('click', '.ans', function () {
                var v = $(".chek:checked").val()
                $.post('ans.php', { k1: qid, k2: v }, function (data) {
                    alert(data);
                });
            });
        });

    </script>

    <style>
        .head {
            height: 200px;
            width: 100%;
            text-align: center;
            background-color: #355e3b;
            border: 2px solid white;
            box-shadow: 5px 5px 5px #404040;
            border-radius: 50px;
        }

        body {
            margin: 0px;
            padding: 0px;
            background-image: url(bg.jpg);
            background-size: cover;
        }

        h1 {
            padding-top: 2.5%;
            font-size: 45px;
            font-family: Cursive;
            color: white;
            -webkit-text-stroke: 1px black;
            font-weight: bold;
            text-shadow: 3px 3px 3px black;

            /* under line codes start  */

            text-decoration-line: underline;
            text-decoration-style: dashed;
            text-underline-position: under;
            text-decoration-color: white;

        }


        input {
            height: 100px;
            width: 100px;
            color: white;
            background-color: #355e3b;
            font-size: 35px;
            margin-left: 60px;
            font-family: Cursive;
            font-weight: bold;
            box-shadow: 3px 3px 3px black;
            border: 2px solid white;
            -webkit-text-stroke: 1px black;

        }

        .q {
            margin-top: 100px;
            height: 400px;
            width: 100%;
            text-align: left;

        }

        input:hover {
            background-color: cyan;
        }
    </style>




</head>

<body>
    <div class="head">
        <h1>ONLINE EXAM FOR MCA STUDENTS &#128221;</h1>
    </div>
    <div class="q">
        <input type="button" value="1" class="x"> <input type="button" value="2" class="x"> <input type="button"
            value="3" class="x">
        <input type="button" value="4" class="x"> <input type="button" value="5" class="x"> <input type="button"
            value="6" class="x">
        <br>
        <p id="z"></p>
    </div>
</body>

</html>