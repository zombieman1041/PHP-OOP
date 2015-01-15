<!-- example 1 -->
<?php
	$a = false;
	$b = 0;

	if(is_bool($a) === true) {
    	echo "Boolean is life";
	}

	if (is_bool($b) === false) {
    	echo "<br> <br>No boolean no life";
	}
// example 2
	$num=678; 
	if (is_integer($num))  
	{  
		echo "<br><br>$num is Integer<br>" ;  
	}  
	else  
	{  
		echo "$num is not an Integer<br>" ;  
	}  
//example 3
	$var_name=127.55;  
	if (is_double($var_name))  
	echo '<br>This is a double value.<br>';  
	else{
		echo 'This is not a double value.<br>';  
		echo '<br>';  
	}  

?>