<html>
<body>
	<center>
	<h2>USERNAME FROM EMAIL ID</h2>
	<form method='POST'>
	Enter the Email ID : <input type='text' name='t1'>
	<br><br>
	<input type='submit' name='b1' value="Extract">
	</form></center>
</body>
</html>

<?php
	if(isset($_POST['b1']))
	{
		$a=$_POST['t1'];
		$username = strstr($a, '@', true); 
  		echo "<center>Email ID : ".$a."<br>Username : ".$username."</center>";
  	}
?>
