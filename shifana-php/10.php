<html>
<body>
	<center>
	<h2>SUM OF PRIME NUMBERS</h2>
	<form method='POST'>
	Enter the limit : <input type='text' name='t1'>
	<br><br>
	<input type='submit' name='b1'>
	</form></center>
</body>
</html>

<?php
	if(isset($_POST['b1']))
	{
		$a=$_POST['t1'];
		$sum=0;
		for($i=2;$i<=$a;$i++)
    		{
    			$flag=1;      
        		for($j=2;$j<=$i/2;$j++)
        		{
				if($i%$j==0)
				{
    					$flag=0;
    					break;
				}
        		}
     			if($flag==1)
     			{
     				$sum=$sum+$i;
     			}
    		}
		echo"<center>The sum of prime numbers upto $a is $sum</center>";

	}
?>
