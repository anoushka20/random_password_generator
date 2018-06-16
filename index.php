<!DOCTYPE html> 

<head> 
			
	<link rel="stylesheet"  href="style.css" />
	
 </head> 
 
 
 <center>
<?php
//


if(isset($_POST['generate']))
{
	$post_upper_case=$_POST['upper_case'];
	$post_lower_case=$_POST['lower_case'];
	$post_numbers=$_POST['numbers'];
	$post_special_chars=$_POST['special_chars'];
	
	$upper_case="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$lower_case="abcdefghijklmnopqrstuvwxyz";
	$numbers="0123456789";
	$special_chars="@#$^*&";
	
	$generated_upper_case= substr(str_shuffle($upper_case),0,$post_upper_case);
	$generated_lower_case= substr(str_shuffle($lower_case),0,$post_lower_case);
	$generated_numbers= substr(str_shuffle($numbers),0,$post_numbers);
	$generated_special_chars= substr(str_shuffle($special_chars),0,$post_special_chars);
	
	
	$mixed="$generated_upper_case$generated_lower_case$generated_numbers$generated_special_chars";
	
	
	$sum=$post_upper_case + $post_lower_case + $post_numbers + $post_special_chars;
	//echo sum;

	$generated_mixed=substr(str_shuffle($mixed),0,$sum);
	

	}	
?>


 
 
 
<html>
<h1>RANDOM PASSWORD GENERATOR</h1>
<br><br>
<hr>
<br><br><br>



<form action="index.php" method="POST">
<h3>Select Number of Upper Case Characters: <select name="upper_case">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
</select><br><br>

Select Number of Lower Case Characters: <select name="lower_case">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
</select><br><br>

Select Number of Numbers: <select name="numbers">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
</select><br><br>

Select Number of Special Characters: <select name="special_chars">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select><br><br><br><br>
<input type="submit" value="Generate" name="generate"><br><br>
</h3>
</form>
<center>


<center>
<h3>
<b>
<?php error_reporting(0);
echo $generated_mixed;
?>
<b>
<h3>
</center>

</html>