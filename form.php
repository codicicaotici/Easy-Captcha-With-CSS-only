 <!DOCTYPE html>
<html>
<head>
<style>
.captcha { 
padding:10px 30px 10px 30px; font-size: 18px; 
-webkit-user-select: none; 
-moz-user-select: none; 
-ms-user-select: none; 
user-select: none; 
background-image: url('captcha.png');}
</style>
</head>
<body>
<?php
function generateCaptcha($num){
	$x=1;
	$code='';
	$num=$num+1;
	for($x;$x<$num;$x++){
		$code .= rand(0,9);
	}
	return $code;
}
$code=generateCaptcha(5);
?>

<h1>Form</h1>
<p>Easy Captcha with CSS only - no javascript no $_SESSION</p>
<p>codicicaotici@gmail.com</p>
<br><br>

	<form action="result.php" method="post" class="form-example">
		<input type="hidden" name="h_code" value="<?php print $code; ?>">
		Captcha      <span class="captcha"><?php print $code; ?></span><br><br>
		Enter code 	<input type="text" name="mycode" id="mycode" value="" required><br><br>
		<input type="submit" value="Subscribe!">
	</form>
</body>
</html> 