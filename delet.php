<?
session_start();
if (!isset($_SESSION['username'])){
	exit("Необходима авторизация! <form action='login.html'>
	<input type='submit' value='Вход'>
</form>");
}

$mysqli = new mysqli("localhost", "root", "", "mydb");
$mysqli -> set_charset("cp125");
$user=$_SESSION['username'];

$z="delete from `users` 
    Where `login`='".$user."'";
$result=$mysqli->query($z);
session_destroy();
?>
<form action="index.html">
	<input type="submit" value="Главная">
</form>