<?php
if ($_POST["submit"]){
    $nom= $_POST["nom"];
    $grade= $_POST["grade"];
    $description = $_POST['description'];

    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if($error==0){
        $extension=pathinfo( $img_name, PATHINFO_EXTENSION);
        $ext = strtolower($extension);
        $accept_ext = array('jpg','jpeg','png');
        if (in_array($ext, $accept_ext)){
            $new_name = uniqid($nom,true).'.'.$ext;
            $img_path = "assets/img/team/".$new_name;

            $req= Staff::addStaff($nom, $grade, $img_path, $description);
            if ($req=="Success"){
                if(move_uploaded_file($tmp_name,$img_path)){
                    $infos = " ajout reuissi";
                }
                else{
                    $infos = "echec";
                }
            }
            else{
                $infos = "Membre du staff administratif existant";
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