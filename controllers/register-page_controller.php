<?php

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $req = User::addUser($username, $password);
    if ($req == "Success"){
        $infos = "Utilisateur ajouter avec success";
        header('Location: ' . PATH . 'login');
    }
    else{
        $infos = "Nom d'utilisateur existant";
    }
}