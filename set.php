<?
$db = new mysqli("localhost", "root", "", "mydb");
 
$newbalance=$_POST['balance'];
$user=$_POST['user'];

$s="UPDATE `users` SET `balance`='$newbalance' where `login`='$user'";
$db->query ($s);
?>
<a href='admin.php'>Next</a>