<?php
session_start();
if(!isset($_SESSION['user'])){
    // si l'utilisateur n'est pas connecté
    // redirection vers la page de connexion
    header("Location:".PATH."home");
}

$user = $_SESSION['user'];
$admin = User::getUserByUsername($user);
$docs = Document::getAllDocument();

if ($_GET['delete']) {
    $id = $_GET['delete'];
//    Recuperons les informations sur le document qu'on desire supprimer
    $doc = Document::getOneDocument($id);
    $path_doc = $doc['nomDocument'];
//    Verifions si le fichier qu'on desire supprimer existe d'abord
    if (file_exists($path_doc)){
//        Dans ce cas supprimons le fichier du dossier avant d'effectuer la suppression dans la base de donnee
        unlink($path_doc);
        $req = Document::removeDocument($id);
        if ($req == "Success"){
            $infos = "Suppression reussi";
        }
        else{
            $infos = "Echec de la suppression";
        }
        header("Location:".PATH."see_document?req=$req&infos=$infos");
    }
    else{
        $infos = "Fichier introuvable";
    }
}

