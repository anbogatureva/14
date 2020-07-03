<?
session_start();
if (!isset($_SESSION['username'])){
	exit("Необходима авторизация! <form action='login.html'>
	<input type='submit' value='Вход'>
</form>");
}
?>
Смена пароля<br>
<form method="POST" action="changpas.php"><br>
	Текущий пароль: <input type="password" name="current_password"><br>
	Новый пароль <input type="password" name="password1"><br>
	Повторите новый пароль: <input type="password" name="password2"><br>
	<input type="submit" value="Сменить пароль">
</form>

<form action="main.php">
	<input type="submit" value="В главное меню">
</form>
