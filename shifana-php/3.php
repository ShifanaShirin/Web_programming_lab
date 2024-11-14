<html>
<body>
	<center>
	<h2>STUDENT GRAGE</H2>
	<form method='POST'>
	Enter Mark :  <input type='text' name='t1'>
	<br><br>
	<input type='submit' name='b1' value='Calculate'>
	</form></center>
</body>
</html>

<?php
	function grade($mark)
	{
		if($mark>=60)
			return "First Division";
		elseif ($mark>=45 && $mark<59)
			return "Second Division";
		elseif ($mark>=33 && $mark<44)
			return "Third Division";
		else
			return "Fail";
	}
	if (isset($_POST['b1']))
	{
		$a=$_POST['t1'];
		$b=grade($a);
		echo " <center> Grade : ".$b."</center>";
	}
?>
	
