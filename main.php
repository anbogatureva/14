<?
session_start();
if (!isset($_SESSION['username'])){
	exit("Необходима авторизация! <form action='login.html'>
	<input type='submit' value='Вход'>
</form>");
}
echo "Здравствуйте, ".$_SESSION['username'].'<BR>';

$mysqli = new mysqli("localhost", "root", "", "mydb");
$mysqli -> set_charset("cp125");
$z="SELECT * from `users` 
Where `login`='".$_SESSION['username']."'";
$result=$mysqli->query($z);
$record=$result->fetch_assoc();
$balance=$record['balance'];
echo "На вашем счету: ".$balance." условных единиц.<br>";
?>
<p>
<form action="send_form.php">
	<input type="submit" value="Перевод другому пользователю">
</form></p>
<form action="changpas_form.php">
	<input type="submit" value="Изменить пароль">
</form>
<form action="delet.php">
	<input type="submit" value="Удалить пользователя">
</form>
<form action="exit.php">
	<input type="submit" value="Выход">
</form>
