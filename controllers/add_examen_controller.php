<?php
session_start();
if(!isset($_SESSION['user'])){
    // si l'utilisateur n'est pas connecté
    // redirection vers la page de connexion
    header("Location:".PATH."home");
}

$user = $_SESSION['user'];
$admin = User::getUserByUsername($user);

if(isset($_POST['submit'])){
    $session = $_POST['session'];
    $examen = $_POST['examen'];
    $nbPres = $_POST['nbPres'];
    $nbAdmis = $_POST['nbAdmis'];
    $nbEchoue = $_POST['nbEchoue'];
    $pourcentage = $_POST['pourcentage'];

    $img_doc = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if($error==0){
        $extension=pathinfo( $img_doc, PATHINFO_EXTENSION);
        $ext = strtolower($extension);
        $accept_ext = array('pdf','doc','docx');
        if (in_array($ext, $accept_ext)){
            $new_name = uniqid($examen,true).'.'.$ext;
            $doc_path = "assets/examen/".$new_name;

            $req= Examen::addExamen($examen, $session, $doc_path, $pourcentage, $nbPres, $nbAdmis, $nbEchoue);
            if ($req=="Success"){
                if(move_uploaded_file($tmp_name,$doc_path)){
                    $infos = " ajout reuissi";
                }
                else{
                    $infos = "echec";
                }
            }
            else{
                $infos = "L'examen de cette session existe deja";
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