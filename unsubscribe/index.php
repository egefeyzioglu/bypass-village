<?php
	$ok = false;
	$db_host = "localhost";
	$db_username = "root";
	$db_passwd = "root";
	$dbname = "bypasvillage";
	
	$conn = mysqli_connect($db_host, $db_username, $db_passwd, $dbname) or die(mysqli_connect_error());
	function unsub(){ //This is a function because I don't want to fix the structure of the code and I just want to use return's.
		global $ok, $conn;
		if(!isset($_GET['unsub_id'])) return;
		
		$sql = "DELETE FROM maillist WHERE register_id = ".mysqli_real_escape_string($conn, $_GET['unsub_id']);
		mysqli_query($conn, $sql) or $fuck = true;
		if(isset($fuck)) return;
		$sql = "INSERT INTO unsub_reasons(unsub_id) VALUES (".mysqli_real_escape_string($conn, $_GET['unsub_id']).")";
		mysqli_query($conn, $sql) or $fuck = true;
		if(isset($fuck)) return;
		if(mysqli_affected_rows($conn) == 0)
			return;
		$ok = true;
	}
	if(isset($_GET['go'])) unsub();
	else $ok = true;
	if(isset($_POST['reason_go'])){
		$sql = "INSERT INTO unsub_reasons(unsub_id, reason) VALUES (".mysqli_real_escape_string($conn, $_GET['unsub_id']).", \"".mysqli_real_escape_string($conn, $_POST['reason'])."\") ON DUPLICATE KEY UPDATE reason=\"".mysqli_real_escape_string($conn, $_POST['reason'])."\"";
		mysqli_query($conn, $sql) or die(mysqli_errno($conn).": ".mysqli_error($conn)."<br/>\n$sql");
		$msg = "Thank you for letting us know why you unsubscribed.";
	}
?>

<html>
	<?php
		if(!$ok)
			echo("Something went wrong when we were trying to unsubscribe you from the mailing list.<br/>
		Please email us at <a href='mailto:webmaster@bypassvillage.org'>webmaster@bypassvillage.org</a> from the email address you are receiving the emails and we will remove you from the mailing list.<br/>
		We apologise for the added hassle.");
		else include("form.php");
	?>
</html>