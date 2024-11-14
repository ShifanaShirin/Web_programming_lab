<?php
	$a = array(1, 2, 3, 4, 5);
    	echo("<center>Original Array : ");
	foreach($a as $i)
	{
    		echo $i . "\n";
	}
    	rsort($a);
    	echo("<br><br>Modified Array : ");
	foreach($a as $i)
	{
    		echo $i . "\n";
	}
?>
