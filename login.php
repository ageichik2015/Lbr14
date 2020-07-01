<?
$db = new mysqli("localhost", "root", "", "mydb");

$s="SELECT `password` from `users` WHERE `login`='".$_POST['login']."'";
$result=$db->query($s);

if ($result->num_rows > 0) {
	$record = $result->fetch_assoc();
	if ($record['password']!=$_POST['password']){
		exit('Password is incorrect');
	}
	session_start();
	$_SESSION['username']=$_POST['login'];
	echo "Login successful.<br>";
	echo "<a href='main.php'>Next</a>";
} else {
	exit('User is not found');
}
?>