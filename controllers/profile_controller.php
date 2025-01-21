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

if (isset($_POST['savename'])){
    $username = $_POST['username'];
    $id = $admin['idUser'];
    $req = $db->prepare("UPDATE user SET loginUser = ? WHERE idUser = ?");
    $req = $req->execute([$username,$id]);
    if ($req) {
        $req = "Success";
        $infos = "Update successfully";
    } else {
        $req = "Error";
        $infos = "Update failed";
    }
    header("Location:".PATH."profile?req=$req&infos=$infos");
}

if (isset($_POST['changepassword'])){
    $password = $_POST['newpassword'];
    $id = $admin['idUser'];
    $req = $db->prepare("UPDATE user SET passwordUser = ? WHERE idUser = ?");
    $req = $req->execute([$password,$id]);
    if ($req) {
        $req = "Success";
        $infos = "Update successfully";
    } else {
        $req = "Error";
        $infos = "Update failed";
    }
    header("Location:".PATH."profile?req=$req&infos=$infos");
}