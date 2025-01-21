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
//    Recuperons les informations sur l'image qu'on desire modifier
$infos_staff = Staff::getOneStaff($id);

if ($_POST['update']){
    $nom= $_POST["nom"];
    $grade= $_POST["grade"];
    $description = $_POST['description'];

    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if (!empty($img_name)){
        if($error === 0){
            $extension=pathinfo( $img_name, PATHINFO_EXTENSION);
            $ext = strtolower($extension);
            $accept_ext = array('jpg','jpeg','png');
            if (in_array($ext, $accept_ext)){
                $new_name = uniqid($nom,true).'.'.$ext;
                $img_path = "assets/img/team/".$new_name;

                $path_image_db = $infos_staff['photoStaff'];
                if (file_exists($path_image_db)){
                    unlink($path_image_db);
                    $req = Staff::updateStaff($id,$nom,$grade,$img_path,$description);
                    if ($req) {
                        if (move_uploaded_file($tmp_name, $img_path)){
                        $req = "Success";
                            $infos =  "Mise a jour effectuer avec success";
                        }
                        else{
                        $req = "Error";
                            $infos =  "Echec de la mise a jour";
                        }
                        header("Location:".PATH."see_staff?req=$req&infos=$infos");
                    }
                    else{
                        $infos =  "Mise a jour impossible";
                        header("Location:".PATH."see_staff?req=$req&infos=$infos");
                    }
                }
                else{
                    $req = "Error";
                    $infos =  "Image introuvable impossible d'effectuer la mise a jour";
                    header("Location:".PATH."see_staff?req=$req&infos=$infos");
                }

            }else {
                $infos = "You can't upload files of this type";
            }
        }else {
            $infos = "unknown error occurred!";
        }
    }else{
        $req = $db->prepare("UPDATE staff SET nomStaff = ?, gradeStaff = ?, descriptionStaff = ? WHERE idStaff = ?");
        $req = $req->execute([$nom,$grade,$description,$id]);
        if ($req) {
            $req = "Success";
            $infos = "Update successfully";
        } else {
            $req = "Error";
            $infos = "Update failed";
        }
        header("Location:".PATH."see_staff?req=$req&infos=$infos");
    }
}