<html>
<body>
	<center>
	<form method='POST'>
	Enter a Number : <input type='text' name='t1'>
	<br><br>
	<input type='submit' name='b1'>
	</form></center>
</body>
</html>

<?php
	if(isset($_POST['b1']))
	{
		$a=$_POST['t1'];
		if($a>0)
			echo "<center>".$a." is a positive number</center>";
		elseif($a<0)
			echo "<center>".$a." is a negative number</center>";
		else
			echo "<center>".$a." is zero</center>";
	}
?>
