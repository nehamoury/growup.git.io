<html>
    <head>

    </head>
    <body>
         <?php
         $c=0;
         $con = mysqli_connect('localhost', 'root', '', 'growup');
         $sel = "select exam.qid,exam.ans,ans.qid,ans.ans from exam,ans where 
                 
         exam.qid=ans.qid and
         exam.ans=ans.ans
         ";
         $q = mysqli_query($con, $sel);

          while($fe=mysqli_fetch_array($q))
        {
            $c++;

        }
echo"you got only $c right answer";
         ?>
    </body>
</html>