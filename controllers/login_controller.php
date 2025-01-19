<?php

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $req = User::connexionUser($username, $password);
    if ($req == "Success"){
        $_SESSION['user'] = $username ;
        header('Location: ' . PATH . 'dashboard');
    }
    else{
        $infos = "nom d'utilisateur ou mot de passe incorrect";
    }
}