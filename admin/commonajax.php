<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

//for admin signup
if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
ob_end_flush();

?>