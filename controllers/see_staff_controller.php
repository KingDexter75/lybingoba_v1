<?php

$staffs = Staff::getAllStaff();

if ($_GET['delete']) {
    $id = $_GET['delete'];
//    Recuperons les informations sur l'image qu'on desire supprimer
    $image = Staff::getOneStaff($id);
    $path_image = $image['photoStaff'];
//    Verifions si l'image qu'on desire supprimer existe d'abord
    if (file_exists($path_image)){
//        Dans ce cas supprimons l'image du dossier avant d'effectuer la suppression dans la base de donnee
        unlink($path_image);
        $req = Staff::removeStaff($id);
        if ($req == "Success"){
            $infos = "Suppression reussi";
        }
        else{
            $infos = "Echec de la suppression";
        }
        header("Location:".PATH."see_staff");
    }
    else{
        $infos = "Image de l'utilisateur introuvable";
    }
}

