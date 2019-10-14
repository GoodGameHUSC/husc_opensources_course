<?php

// namespace pages;

// use models\User;

include_once(ROOT_DIRECTORY."/models/user.php");


$name = $_REQUEST['name'] ?? 'No name';

$user = new User('hung', '123', 'hung pham');
// var_dump($user);
echo 'Hello Ajax :', json_encode($user);
