<?php  
require '../../config/config.php';
include("../classes/User.php");
include("../classes/Notification.php");

$notification = new Notification($con, $_REQUEST['userLoggedIn']);
echo $notification->getNotifications($_REQUEST, $limit);
	
?>