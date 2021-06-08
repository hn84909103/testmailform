<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php echo $msg; ?>>

	<form method="post">
		Name:<input type="text" name="name" value="<?php echo $name; ?>"  />
		Email:<input type="text" name="email" value="<?php echo $email; ?>" />
		Message:<textarea name="message" rows="5" cols="40" /><?php echo $message; ?>></textarea>
		<?php if (CAPTCHA_ENABLED != '0') { ?>>
		<?php echo CAPTCHA1; ?> + <?php echo CAPTCHA2; ?>> = ?
		<input type="text" name="captcha" />
		<input type="hidden" name="captcha1" value="<?php echo CAPTCHA1; ?>" />
		<input type="hidden" name="captcha2" value="<?php echo CAPTCHA2; ?>" />
		<?php } ?>>
		<input type="submit" value="Submit" />
	</form>

</body>
</html>