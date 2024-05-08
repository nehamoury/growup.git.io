<?php
session_start();

?>
<style>
.chek
{
  width: 0px;
  height: 1px;  
}
.b
{
    margin-top: 20px;
}
.a
{
    margin-top: 50px;
    font-size: 30px;
    color: white;
    margin-left: 20px;
    text-shadow: 5px 4px 5px black;
}
input[type="radio"]
{
    height: 18px;
    width: 18px;
}
table
{
    padding:10px;
    margin: 10px;
    border-spacing: 20px;
}
.pre
{
    height: 50px;
    width: 120px;
    font-size: 20px;
    text-align: center;
}
.next
{
    height: 50px;
    width: 110px;
    font-size: 20px;
    text-align: center;
}
.ans
{
    height: 50px;
    width: 110px;
    font-size: 20px;
    text-align: center;
}
.finish
{
    height: 50px;
    width: 110px;
    font-size: 20px;
    text-align: center;
}



</style>

<?php
$a = $_POST['k1'];

$con = mysqli_connect('localhost', 'root', '', 'growup');
$sel = "select * from exam where qid='$a'";
$q = mysqli_query($con, $sel);

while ($fe = mysqli_fetch_array($q)) {
    echo " <div class='a'>$fe[qid]. $fe[qus]
    <div class='b'>
    <table>
    <tr>
    <td><input type='radio' class='chek' value='$fe[op1]' name=x> a. $fe[op1]</td>
    <td><input type='radio' class='chek' value='$fe[op3]' name=x> c. $fe[op3]</td>
    </tr>
     <tr>
    <td><input type='radio' class='chek'value='$fe[op2]' name=x> b. $fe[op2]</td>
    <td><input type='radio' class='chek'value='$fe[op4]' name=x> d. $fe[op4]</td>
    </tr>
    </table>
    <input type='button'value='PREVIOUS'class='pre'>

    <input type='button'value='NEXT'class='next'>

    <input type='button'value='ANSWER'class='ans'>

    <a href='finish.php'><input type='button' value='FINISH' class='finish'></a>
    </div>
    </div>
          ";
}


?>