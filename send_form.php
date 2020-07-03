<?
session_start();
if (!isset($_SESSION['username'])){
	exit("Необходима авторизация! <form action='login.html'>
	<input type='submit' value='Вход'>
</form>");
}
?>
Перевод средств<br>
<form method="POST" action="send.php"><br>
Получатель: <input name="receiver"><br>
Сумма: <input name="sum"><br>
<input type="submit" value="Выполнить Перевод">
</form>
<form action="main.php">
	<input type="submit" value="В главное меню">
</form>
