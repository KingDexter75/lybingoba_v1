<?php
session_start();
if(!isset($_SESSION['user'])){
    // si l'utilisateur n'est pas connecté
    // redirection vers la page de connexion
    header("Location:".PATH."home");
}

$user = $_SESSION['user'];
$admin = User::getUserByUsername($user);
$APS = Ap::getAllAp();

if ($_GET['delete']) {
    $id = $_GET['delete'];
//    Recuperons les informations sur l'image qu'on desire supprimer
    $image = Ap::getOneAp($id);
    $path_image = $image['photoAP'];
//    Verifions si l'image qu'on desire supprimer existe d'abord
    if (file_exists($path_image)){
//        Dans ce cas supprimons l'image du dossier avant d'effectuer la suppression dans la base de donnee
        unlink($path_image);
        $req = Ap::removeAp($id);
        if ($req == "Success"){
            $infos = "Suppression reussi";
        }
        else{
            $infos = "Echec de la suppression";
        }
        header("Location:".PATH."see_ap?req=$req&infos=$infos");
    }
    else{
        $infos = "Image de l'utilisateur introuvable";
    }
}

