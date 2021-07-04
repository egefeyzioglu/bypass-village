<script>
		function checkOther(){
			if(document.getElementById("other").selected){
				document.getElementById("other_text").style.display = "inline";
			}else{
				document.getElementById("other_text").style.display = "none";
			}
		}
	</script>

<h2>We're sad to see you go</h2>
	<p>
		You have succesfully unsubscribed from the Lock Bypass Village mailing list.
	</p>
	<p>
		Please let us know why you decided to unsubscribe.
	</p>
	<form method=POST action="?unsub_id=<?php echo(htmlspecialchars($_GET['unsub_id'])); ?>">
		<select name=reason required onchange="checkOther()">
			<option selected disabled>Please select reason</option>
			<option value="interest">I'm no longer interested in being in the mailing list</option>
			<option value="toomany">You were sending out too many emails</option>
			<option value="accident">I subscribed by accident</option>
			<option value="other" id=other>Other (please specify)</option>
		</select>
		<input style="display: none;" name=other id=other_text>
		<input type=submit name=reason_go>
		<?php if(isset($msg)) echo("<br/>$msg"); ?>
	</form>