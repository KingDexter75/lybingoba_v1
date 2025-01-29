<?php
session_start();
if (!isset($_SESSION['user'])) {
    // si l'utilisateur n'est pas connecté
    // redirection vers la page de connexion
    header("Location:" . PATH . "home");
}

$user = $_SESSION['user'];
$admin = User::getUserByUsername($user);
global $db;
$id = $_GET['modifier'];
//    Recuperons les informations sur le fichier qu'on desire modifier
$infos_examen = Examen::getOneExamen($id);

if ($_POST['update']) {
    $session = $_POST['session'];
    $examen = $infos_examen['typeExamen'];
    $nbPres = $_POST['nbPres'];
    $nbAdmis = $_POST['nbAdmis'];
    $nbEchoue = $_POST['nbEchoue'];
    $pourcentage = $_POST['pourcentage'];

    $file_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if (!empty($file_name)) {
        if ($error === 0) {
            $extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $ext = strtolower($extension);
            $accept_ext = array('pdf', 'doc', 'docx');
            if (in_array($ext, $accept_ext)) {
                $new_name = uniqid($examen, true) . '.' . $ext;
                $img_path = "assets/examen/" . $new_name;

                $path_file_db = $infos_examen['fichierExamen'];
                if (file_exists($path_file_db)) {
                    unlink($path_file_db);
                    $req = Examen::updateExamen($id, $examen, $session, $img_path, $pourcentage, $nbPres, $nbAdmis, $nbEchoue);
                    if ($req) {
                        if (move_uploaded_file($tmp_name, $img_path)) {
                            $req = "Success";
                            $infos =  "Mise a jour effectuer avec success";
                        } else {
                            $req = Examen::removeExamen($id);
                            if ($req == "Success") {
                                $infos =  "Impossible d'importer le fichier en raison de sa taille";
                            } else {
                                $infos =  "Echec de la suppression de l'element introuvable de la base de donnees";
                            }
                        }
                        header("Location:" . PATH . "see_examen?req=$req&infos=$infos");
                    }
                } else {
                    $req = Examen::removeExamen($id);
                    if ($req == "Success") {
                        $infos =  "Fichier introuvable element supprime de la base de donnees";
                    } else {
                        $infos =  "Echec de la suppression de la base de donnees";
                    }
                    header("Location:" . PATH . "see_examen?req=$req&infos=$infos");
                }
            } else {
                $infos = "You can't upload files of this type";
            }
        } else {
            $infos = "unknown error occurred!";
        }
    } else {
        $req = $db->prepare("UPDATE examen SET typeExamen=?, sessionExamen=?, pourcentage=?, nombrePresentes=?, nombreAdmis=?, nombreEchoue=? WHERE idExamen=?");
        $req = $req->execute([$examen, $session, $pourcentage, $nbPres, $nbAdmis, $nbEchoue, $id]);
        if ($req) {
            $req = "Success";
            $infos = "Update successfully";
        } else {
            $req = "Error";
            $infos = "Update failed";
        }
        header("Location:" . PATH . "see_examen?req=$req&infos=$infos");
    }
}
