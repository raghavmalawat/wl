<html>
<body>
<form method="POST" action="pg8a.php">
<h2> SIMPLE CALCULATOR </h2>
First Number : <input name="num1"/> </br>
Second Number : <input name="num2"/> </br>
<button name="submit">Calculate</button>
</form>
<?php
if(isset($_POST['submit'])) // it checks if the input submit is filled
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if(is_numeric($num1) and is_numeric($num2) )
{
echo "Addition :".($num1+$num2)."<br>";
echo "Subtraction :".($num1-$num2)."</br>";
echo "Multiplication : ".($num1*$num2)."</br>";
echo "Division : ".($num1/$num2)."</br>";
echo "</table>";
}
else
echo"<script> alert(' ENTER VALID NUMBER');</script>";
}
?>
</body>
</html>
