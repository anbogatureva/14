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

$z="SELECT * from `users` 
    Where `login`='".$user."'";
$result=$mysqli->query($z);
$record=$result->fetch_assoc();

if(md5($_POST['current_password'])==$record['password']){
	if($_POST['password1']==$_POST['password2']){
		$newpassword=$_POST['password1'];
		$z="UPDATE `users` SET `password`='$newpassword' where `login`='$user'";
		$mysqli->query($z);
	}
	else{
		echo "Пароли не совпадают<br>";

	}
}
else{
	echo "Указан не верный текущий пароль<br>";
}
?>
<form action="main.php">
	<input type="submit" value="В главное меню">
</form>