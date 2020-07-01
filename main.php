<?
session_start();
if (!isset($_SESSION['username'])) {
	exit ("You need <a href='index.html'>authorization</a>");
}

echo "Hello, ".$_SESSION['username'].'<BR>';

$db = new mysqli("localhost", "root", "", "mydb");
$s="SELECT * from `users` WHERE `login`='".$_SESSION['username']."'";
$result=$db->query($s);
$record = $result->fetch_assoc();
$balance=$record['balance'];
echo "Your balance: ".$balance." ed.<br>";
?>

<a href='send_form.php'>Transfer to another user</a><br>
<a href='exit.php'>Exit</a><br>
<a href='delete.php'>Delete user</a><br>
<a href='change_password_form.html'>Change password</a><br>

