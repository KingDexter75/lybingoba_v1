<?php

global $db;
$id = $_GET['modifier'];
//    Recuperons les informations sur l'image qu'on desire modifier
$infos_ap = Ap::getOneAp($id);

if ($_POST['update']){
    $nom = $_POST['nom'];
    $departement = $_POST['depart'];

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
                $img_path = "assets/img/AP/".$new_name;

                $path_image_db = $infos_ap['photoAP'];
                if (file_exists($path_image_db)){
                    unlink($path_image_db);
                    $req = Ap::updateAp($id, $nom, $img_path, $departement);
                    if ($req) {
                        if (move_uploaded_file($tmp_name, $img_path)){
                            $infos =  "Mise a jour effectuer retourner pour appliquer les modifications";
                        }
                        else{
                            $infos =  "Echec de la mise a jour";
                        }
                        header("Location:".PATH."see_ap");
                    }
                }

            }else {
                $infos = "You can't upload files of this type";
            }
        }else {
            $infos = "unknown error occurred!";
        }
    }else{
        $req = $db->prepare("UPDATE AP SET nomAP = ?,departementAP = ? WHERE idAP = ?");
        $rep = $req->execute([$nom,$departement,$id]);
        if ($rep) {
            $infos = "Update successfully";
        } else {
            $infos = "Update failed";
        }
        header("Location:".PATH."see_ap");
    }
}