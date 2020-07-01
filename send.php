<?
session_start();
if (!isset($_SESSION['username'])) {
	exit("Authorization required!. <a href='index.html'>Entry</a>");
}

$sender=$_SESSION['username'];
$receiver=$_POST['receiver'];
$sum=floatval($_POST['sum']);

$db = new mysqli('localhost', 'root', '', 'mydb');

$s="SELECT `balance` from `users` WHERE `login`= '$sender'";
$result=$db->query($s);
$record = $result->fetch_assoc();
$s1=$record['balance'];

if ($sum<0){
	echo "Error sum<br>";
	} 
else{
	if ($s1<$sum ){
		echo "Not enough money <br>";
		} 
	else {
		$db->query ("UPDATE `users` SET `balance`= `balance`-$sum where `login`='$sender'");
		$db->query ("UPDATE `users` SET `balance`= `balance`+$sum where `login`='$receiver'");
		}
	}
?>
<a href='main.php'>Menu</a>