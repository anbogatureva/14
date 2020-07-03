<?
$mysqli=  new mysqli("localhost", "root", "", "mydb");
$mysqli -> set_charset("cp125");

$newbalance=$_POST['balance'];
$user=$_POST['user'];

$z="UPDATE `users` SET `balance`='$newbalance' where `login`='$user'";
$mysqli->query($z);
?>
<form action="admin.php">
	<input type="submit" value="Продолжить">
</form>
