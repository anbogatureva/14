<?
$mysqli = new mysqli("localhost", "root", "", "mydb");
$mysqli -> set_charset("cp125");

$z = "Select `password` from `users` where `login`='".$_POST['login']."'";
$result=$mysqli->query($z);


if ($result->num_rows > 0){
	$record = $result->fetch_assoc();
	if($record['password']!=md5($_POST['password'])){
		exit( "Пароль указан не верно");
	}
	session_start();
	$_SESSION['username']=$_POST['login'];
	echo "Вход выполнен успешно.<br>";
	echo "<form action='main.php'>
	<input type='submit' value='Продолжить'>
</form>";
}else{
	exit("Пользователь не найден");
}
?>