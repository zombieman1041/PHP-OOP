<!-- example 1 -->
<?php
$a = false;
$b = 0;

// Since $a is a boolean, it will return true
if (is_bool($a) === true) {
    echo "Boolean is life";
}

// Since $b is not a boolean, it will return false
if (is_bool($b) === false) {
    echo "<br> <br>No boolean no life";
}
// example 2
$var_name1=678; 
if (is_integer($var_name1))  
{  
echo "<br><br>$var_name1 is Integer<br>" ;  
}  
else  
{  
echo "$var_name1 is not an Integer<br>" ;  
}  
//example 3
$var_name=127.55;  
if (is_double($var_name))  
echo '<br>This is a double value.<br>';  
else  
echo 'This is not a double value.<br>';  
echo '<br>';  
?>