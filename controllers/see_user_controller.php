<?php

session_start();
$username = $_SESSION['user'];

$info_user = User::getUserByUsername($username);
$id = $info_user['idUser'];
$users = User::getAllUser($id);