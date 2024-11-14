<html>
<body>
	<center>
	<h2>ARMSTRONG NUMBER</h2>
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
		$b=$a;
		$total=0;
		while($a!=0)  
		{  
			$rem=$a%10;  
			$a=$a/10;  
			$total=$total+$rem*$rem*$rem;  
		}  
		if($b==$total)
			echo "<center>".$b." is an Armstrong Number</center>";
		else
			echo "<center>".$b." is not an Armstrong Number</center>";
	}
?>
