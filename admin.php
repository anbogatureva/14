<?
$mysqli=  new mysqli("localhost", "root", "", "mydb");
$mysqli -> set_charset("cp125");

$z='SELECT * from `users`';
$result=$mysqli->query($z);

echo'Список пользователей: <br>';
while ($row=$result->fetch_assoc()) {
?>
	<form action='set.php' method='POST'>
	<? echo $row['login']?>		
	<input type='hidden' name='user' value='<? echo $row['login']?>'>
	<input name='balance' value='<? echo $row['balance'] ?>' size=5>
	<input type='submit' value='Установить новое значение'>
	</form>
<?
}
?>
<form action="index.html">
	<input type="submit" value="Главная">
</form>