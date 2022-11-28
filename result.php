  <!DOCTYPE html>
<html>
<body>

<h1>Result</h1>
<p>Easy Captcha with CSS only - no javascript no $_SESSION</p>
<p>codicicaotici@gmail.com</p>
<br><br>

<?php 
print  $_POST['h_code'];
print '<br>'; 
print @$_POST['mycode'];
print '<br>';
if ($_POST['h_code'] == @$_POST['mycode'] ) {
	print "Perfect !!";
} else print "Error";	
?>

</body>
</html> 