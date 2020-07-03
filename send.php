<?
session_start();
if (!isset($_SESSION['username'])){
	exit("Необходима авторизация! <form action='login.html'>
	<input type='submit' value='Вход'>
</form>");
}

$sender=$_SESSION['username'];
$receiver=$_POST['receiver'];
$sum=floatval($_POST['sum']);

	$mysqli = new mysqli("localhost", "root", "", "mydb");
	$mysqli -> set_charset("cp125");
	$z="SELECT * from `users` 
    Where `login`='".$sender."'";
	$result=$mysqli->query($z);
	$record=$result->fetch_assoc();

if($sum>0){
	if($sum<=$record['balance']){
		$mysqli->query("UPDATE `users` set `balance`=`balance`-$sum where `login`='$sender'");
		$mysqli->query("UPDATE `users` set `balance`=`balance`+$sum where `login`='$receiver'");

	}
	else{
		echo "Недостаточно средств<br>";
	}
}
else
{
	echo "Некорректная сумма перевода<br>";
}
?>

<form action="main.php">
	<input type="submit" value="В главное меню">
</form>
