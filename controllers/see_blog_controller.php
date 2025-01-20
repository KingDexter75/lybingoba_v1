<?php

$blogs = Blog::getAllBlog();

if ($_GET['delete']) {
    $id = $_GET['delete'];
//    Recuperons les informations sur l'image qu'on desire supprimer
    $blog = Blog::getOneBlog($id);
    $path_blog = $blog['photoBlog'];
//    Verifions si l'image qu'on desire supprimer existe d'abord
    if (file_exists($path_blog)){
//        Dans ce cas supprimons le fichier du dossier avant d'effectuer la suppression dans la base de donnee
        unlink($path_blog);
        $req = Blog::removeBlog($id);
        if ($req == "Success"){
            $infos = "Suppression reussi";
        }
        else{
            $infos = "Echec de la suppression";
        }
        header("Location:".PATH."see_blog?req=$req&infos=$infos");
    }
    else{
        $infos = "Fichier introuvable";
    }
}
