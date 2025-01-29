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
$infos_blog = Blog::getOneBlog($id);

if ($_POST['update']){
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $contenu = $_POST['contenu'];

    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if (!empty($img_name)){
        if($error === 0){
            $extension=pathinfo( $img_name, PATHINFO_EXTENSION);
            $ext = strtolower($extension);
            $accept_ext = array('jpg','jpeg','png');
            if (in_array($ext, $accept_ext)){
                $new_name = uniqid($titre,true).'.'.$ext;
                $img_path = "assets/img/blog/".$new_name;

                $path_image_db = $infos_blog['photoBlog'];
                if (file_exists($path_image_db)){
                    unlink($path_image_db);
                    $req = Blog::updateBlog($id,$img_path,$contenu,$date,$titre);
                    if ($req == "Success") {
                        if (move_uploaded_file($tmp_name, $img_path)){
                            $req = "Success";
                            $infos =  "Mise a jour effectuer avec success";
                        }
                        else{
                            $req = Blog::removeBlog($id);
                            if ($req == "Success") {
                                $infos =  "Impossible d'importer l'image en raison de sa taille trop grande";
                            } else {
                                $infos =  "Echec de la suppression de la base de donnees";
                            }
                        }
                        header("Location:".PATH."see_blog?req=$req&infos=$infos");
                    }
                    else{
                        $infos =  "Erreur survenue lors de l'ajout dans la base de donnees";
                    }
                }

            }else {
                $infos = "Extension de l'image non supporter";
            }
        }else {
            $infos = "unknown error occurred!";
        }
    }else{
        $req = $db->prepare("UPDATE blog SET contenuBlog = ?, dateBlog = ?, titreBlog = ? WHERE idBlog = ?");
        $req = $req->execute([$contenu,$date,$titre,$id]);
        if ($req) {
            $req = "Success";
            $infos = "Update successfully";
        } else {
            $req = "Error";
            $infos = "Update failed";
        }
        header("Location:".PATH."see_blog?req=$req&infos=$infos");
    }
}