<html>
<body>
	<center>
	<h2>AREA OF TRIANGLE</h2>
	<form method='POST'>
	Enter Base of the Triangle : <input type='text' name='t1'>
	<br><br>
	Enter Height of the Triangle : <input type='text' name='t2'>
	<br><br>
	<input type='submit' name='b1'>
	</form></center>
</body>
</html>

<?php
	if(isset($_POST['b1']))
	{
		$a=$_POST['t1'];
		$b=$_POST['t2'];
		$c=0.5*$a*$b;
		echo "<center>Area : ".$c."</center>";
	}
?>
