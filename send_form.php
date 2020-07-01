<?
session_start();
if (!isset($_SESSION['username'])) {
	exit ("Need authorization. <a href='index.html'>Entry</a>");
}
?>

Money transaction<br>
<form method="POST" action="send.php"><br>
Recepient: <input name="receiver"><br>
Summa: <input name="sum"><br>
<input type="submit" value="Make a transfer">
</form>
<br>
<a href='main.php'>Menu</a>