<?php
session_start();
if(!isset($_SESSION['user'])){
    // si l'utilisateur n'est pas connecté
    // redirection vers la page de connexion
    header("Location:".PATH."home");
}

$user = $_SESSION['user'];
$admin = User::getUserByUsername($user);
if ($_POST["submit"]){
    $nom = $_POST['nom'];
    $trimestre= $_POST["trimestre"];

    $img_doc = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if($error==0){
        $extension=pathinfo( $img_doc, PATHINFO_EXTENSION);
        $ext = strtolower($extension);
        $accept_ext = array('pdf','doc','docx');
        if (in_array($ext, $accept_ext)){
            $new_name = uniqid($nom,true).'.'.$ext;
            $doc_path = "assets/fichier pdf/".$new_name;

            $req= Document::addDocument($nom, $doc_path, $trimestre);
            if ($req=="Success"){
                if(move_uploaded_file($tmp_name,$doc_path)){
                    $infos = " ajout reuissi";
                }
                else{
                    $infos = "echec";
                }
            }
            else{
                $infos = "Nom du document ou trimestre existant";
            }
        }else{
            $req = "Error";
            $infos = "Extension invalide";
        }
    }else{
        $req = "Error";
        $infos = "Taille du fichier trop grande changer de fichier ou reduire la taille";
    }
}