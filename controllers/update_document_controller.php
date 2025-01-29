<?php
session_start();
if(!isset($_SESSION['user'])){
    // si l'utilisateur n'est pas connecté
    // redirection vers la page de connexion
    header("Location:".PATH."home");
}

$user = $_SESSION['user'];
$admin = User::getUserByUsername($user);
global $db;
$id = $_GET['modifier'];
//    Recuperons les informations sur l'file qu'on desire modifier
$infos_document = Document::getOneDocument($id);

if ($_POST['update']){
    $nom = $_POST['nom'];
    $trimestre= $_POST["trimestre"];

    $img_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if (!empty($img_name)){
        if($error === 0){
            $extension=pathinfo( $img_name, PATHINFO_EXTENSION);
            $ext = strtolower($extension);
            $accept_ext = array('pdf','doc','docx');
            if (in_array($ext, $accept_ext)){
                $new_name = uniqid($nom,true).'.'.$ext;
                $img_path = "assets/fichier pdf/".$new_name;

                $path_file_db = $infos_document['nomDocument'];
                if (file_exists($path_file_db)){
                    unlink($path_file_db);
                    $req = Document::updateDocument($id, $nom, $img_path, $trimestre);
                    if ($req) {
                        if (move_uploaded_file($tmp_name, $img_path)){
                            $req = "Success";
                            $infos =  "Mise a jour effectuer avec success";
                        }
                        else {
                            $req = Document::removeDocument($id);
                            if ($req == "Success") {
                                $infos =  "Impossible d'importer le fichier en raison de sa taille";
                            } else {
                                $infos =  "Echec de la suppression de l'element introuvable de la base de donnees";
                            }
                        }
                        header("Location:" . PATH . "see_document?req=$req&infos=$infos");
                    }
                } else {
                    $req = Document::removeDocument($id);
                    if ($req == "Success") {
                        $infos =  "Fichier introuvable element supprime de la base de donnees";
                    } else {
                        $infos =  "Echec de la suppression de la base de donnees";
                    }
                    header("Location:" . PATH . "see_document?req=$req&infos=$infos");
                }
            }
            else{
                $infos = "Extension non supporter pour le document";
            }
        }else {
            $infos = "unknown error occurred!";
        }
    }else{
        $req = $db->prepare("UPDATE document SET titreDocument = ?,trimestreDocument = ? WHERE idDocument = ?");
        $req = $req->execute([$nom,$trimestre,$id]);
        if ($req) {
            $req = "Success";
            $infos = "Update successfully";
        } else {
            $req = "Error";
            $infos = "Update failed";
        }
        header("Location:".PATH."see_document?req=$req&infos=$infos");
    }
}