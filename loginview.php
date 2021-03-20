<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo site_url(); ?>/login/index" method="post">
<input type="text" name="txtemail" placeholder="Enter email"  value="
<?php echo get_cookie('cuid'); ?>"/>
<?php
echo form_error('txtemail');
?>
<br>
<input type="password" name="txtpass" placeholder="Enter password" value="
<?php echo get_cookie('cpwd'); ?>" />
<?php
echo form_error('txtpass');
?>
<br>
<input type="checkbox" name="chk" <?php if(get_cookie('cuid')){ ?> checked <?php } ?> 	/> Remember me <br>
<input type="submit" name="btnsubmit" value="Login" />

</form>	
<a href="<?php echo site_url(); ?>/login">Login here</a>
<center><?php //echo validation_errors(); ?></center>
</body> 
</html>