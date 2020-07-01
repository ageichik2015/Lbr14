<?
$db = new mysqli("localhost", "root", "", "mydb"); 

$s='SELECT * from `users`';
$result=$db->query($s);

echo 'a list of users: <br>';
while ($row = $result->fetch_assoc()) {
?>
	<form action='set.php' method='POST'>
	<? echo $row['login'] ?>
	<input type='hidden' name='user' value='<? echo $row['login'] ?>'>
	<input name='balance' value='<? echo $row['balance'] ?>' size=5>
	<input type='submit' value='New value'>
	</form>
<?
}
?>
