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
        $nom= $_POST["nom"];
        $departement= $_POST["depart"];
        $img_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];

        if($error==0){
            $extension=pathinfo( $img_name, PATHINFO_EXTENSION);
            $ext = strtolower($extension);
            $accept_ext = array('jpg','jpeg','png');
            if (in_array($ext, $accept_ext)){
                $new_name = uniqid($nom,true).'.'.$ext;
                $img_path = "assets/img/AP/".$new_name;

                $req= Ap::addAp($nom, $img_path,$departement);
                if ($req=="Success"){
                    if(move_uploaded_file($tmp_name,$img_path)){
                        $infos = " ajout reuissi";
                    }
                    else{
                        $infos = "echec";
                    }
                }
                else{
                    $infos = "Nom de l'ap ou departement existant";
                }
            }else{
                $req = "Error";
                $infos = "Extension invalide";
            }
        }else{
            $req = "Error";
            $infos = "Probleme survenue lors de l'importation de l'image";
        }
    }