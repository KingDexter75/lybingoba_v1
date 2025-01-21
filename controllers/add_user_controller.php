<?php
session_start();
if(!isset($_SESSION['user'])){
    // si l'utilisateur n'est pas connecté
    // redirection vers la page de connexion
    header("Location:".PATH."home");
}

$user = $_SESSION['user'];
$admin = User::getUserByUsername($user);
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $req = User::addUser($username, $password);
    if ($req == "Success"){
        $infos = "Utilisateur ajouter avec success";
    }
    else{
        $infos = "Nom d'utilisateur existant";
    }
}