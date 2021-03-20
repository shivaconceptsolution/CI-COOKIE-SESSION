<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="<?php echo site_url(); ?>/studentcontroller/viewstu">View Record </a>
<a href="<?php echo site_url(); ?>/studentcontroller/logout">Logout</a>
	<h1>Welcome <?php echo $this->session->userdata('uid'); ?></h1>
	<?php echo get_cookie('cuid'); ?>
<form action="<?php echo site_url(); ?>/studentcontroller	/indexlogic" method="post">

<table>
	
<tr><td>Enter Rno</td><td><input type="text" name="txtrno"></td></tr>
<tr><td>Enter Name</td><td><input type="text" name="txtname" /></td></tr>	
<tr><td></td><td><input type="submit" name="btnsubmit" value="Insert" /></td></tr>
</table>

</form>
<?php
echo @$data;
?>
</body>
</html>