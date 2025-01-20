<?php

if (isset($_POST['submit'])){
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $contenu = $_POST['contenu'];
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if($error==0){
        $extension=pathinfo( $img_name, PATHINFO_EXTENSION);
        $ext = strtolower($extension);
        $accept_ext = array('jpg','jpeg','png');
        if (in_array($ext, $accept_ext)){
            $new_name = uniqid($titre,true).'.'.$ext;
            $img_path = "assets/img/blog/".$new_name;

            $req = Blog::addBlog($img_path, $contenu, $date, $titre);

            if ($req=="Success"){
                if(move_uploaded_file($tmp_name,$img_path)){
                    $infos = " ajout reuissi";
                }
                else{
                    $infos = "echec";
                }
            }
            else{
                $infos = "Un blog disposant de cette date et du meme nom existe deja";
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