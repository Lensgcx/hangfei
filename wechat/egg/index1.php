<?php
define('IN_ECS', true);
require(dirname(__FILE__) . '/../../includes/init.php');
session_start();
if (strpos($_SERVER["HTTP_USER_AGENT"], "MicroMessenger")) 
{
	$scene_id = $_GET['scene_id'];
	if(empty($scene_id)) 
	{
		exit('请从微信进入');
	}
}
else 
{
	exit('请从微信进入');
}

$qr_path = $db->getOne("SELECT `qr_path` FROM `wxch_qr` WHERE `scene_id`='$scene_id'");

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>砸金蛋</title>
</head>
<body>

	<div class="grid">
		<div id="f"><img  src="<?php echo $qr_path;?>" /></div>
	</div>

	
</body>
</html>
