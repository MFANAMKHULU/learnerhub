<?php
require_once 'controller.php';

$userController = new UserController();
$userController->index();
$userController->show(123);
?>
