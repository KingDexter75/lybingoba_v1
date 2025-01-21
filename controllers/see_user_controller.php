<?php
session_start();
if(!isset($_SESSION['user'])){
    // si l'utilisateur n'est pas connecté
    // redirection vers la page de connexion
    header("Location:".PATH."home");
}

$user = $_SESSION['user'];
$admin = User::getUserByUsername($user);

$info_user = User::getUserByUsername($user);
$id = $info_user['idUser'];
$users = User::getAllUser($id);