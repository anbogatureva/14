<?
$mysqli = new mysqli("localhost", "root", "", "mydb");
$mysqli -> set_charset("cp125");

$login=$_POST['login'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if(strlen($login)>=6&&strlen($password)>=6&&
preg_match('/^[a-z0-9]+$/i', $login)==true){
if (preg_match('/^[a-z0-9]+$/i', $password)==true&&$password==$password2){
	$z = "insert into `users` (`login`, `password`) 
values ('$login', md5('$password'))";

$mysqli->query($z);
echo "Пользователь зарегестрирован <form action='login.html'>
	<input type='submit' value='Вход'>
</form>";
	
}else{
	echo"Ошибка. Пароли не совпадают <form action='reg_form.html'>
	<input type='submit' value='Повторить регистрацию'>
</form>";
}
}
else{
	echo "Введенные данные не соответсвуют требованиям <form action='reg_form.html'>
	<input type='submit' value='Повторить регистрацию'>
</form>";
}
?>

