<html>
<body>
	<center>
	<h2>ADDITION</h2>
	<form method='POST'>
	Enter first Number : <input type='text' name='t1'>
	<br><br>
	Enter second Number : <input type='text' name='t2'>
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
		$c=$a+$b;
		echo "<center>Sum : ".$c."</center>";
	}
?>
