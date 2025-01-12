<?php
    if ($_POST["submit"]){
        $nom= $_POST["name"];
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
                $img_path = "assets/img/les AP".$new_name;

                $req= Ap::addAp($nom, $img_path,$departement);
                if ($req=="Success"){
                    if(move_uploaded_file($tmp_name,$img_path)){
                        echo" ajout reuissi";
                    }
                    else{
                        echo "echec";
                    }
                }
            }
        }
    } 