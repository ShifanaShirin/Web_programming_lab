<html>
<body>
	<center>
	<h2>FACTORIAL</H2>
	<form method='POST'>
	Enter a Number :  <input type='text' name='t1'>
	<br><br>
	<input type='submit' name='b1' value='Calculate'>
	</form></center>
</body>
</html>

<?php
	function fact($a)
	{
		$f=1;
		for($i=1;$i<=$a;$i++)
			$f=$f*$i;
		return $f;
	}
	
	if(isset($_POST['b1']))
	{
		$a=$_POST['t1'];
		$b=fact($a);
		echo " <center> Factorial : ".$b. "</center>";
	}
?>
