<?php 
require_once('function.php');
require_once('Connect2.1/qqConnectAPI.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php if (!isset($_COOKIE['qq_accesstoken']) || !isset($_COOKIE['openid'])){ ?>
	<a href="qqlogin.php">登录QQ</a>
	<?php } else {?>
		<a href="qqlogout.php">退出QQ</a>
	<?php }?>
</body>
</html>