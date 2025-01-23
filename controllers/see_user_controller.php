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

if (isset($_GET['delete'])){
    $idUser = $_GET['delete'];
    if ($idUser <> $id){
        $req = User::removeUser($idUser);
        if ($req == "Success"){
            $infos = "Utilisateur supprimer avec success";
        }else{
            $infos = "Suppression echouer";
        }
    }else{
        $req = "Error";
        $infos = "Impossible de supprimer cet utilisateur car il est actuellement connecter";
    }

    header("Location:".PATH."see_user?req=$req&infos=$infos");
}