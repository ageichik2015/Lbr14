<?
session_start();
if (!isset($_SESSION['username'])) {
	exit ("You need <a href='index.html'>authorization</a>");
}

$db = new mysqli("localhost", "root", "", "mydb");  
$login = $_SESSION['username'];
$db->query ("DELETE FROM `users` where `login` = '$login'");
echo (User delete);

?>
