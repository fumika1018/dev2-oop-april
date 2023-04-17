<?php 

include '../classes/User.php';

$User = new User;
$User -> login($_POST);