<html>
<body>
	<center>
	<h2>DIVISIBILITY CHECK</h2>
	<form method='POST'>
	Enter the Divident : <input type='text' name='t1'>
	<br><br>
	Enter the Divisor : <input type='text' name='t2'>
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
		if($a%$b==0)
			echo "<center>".$a." is divisible by ".$b;
		else
			echo "<center>".$a." is not divisible by ".$b;
	}
?>
