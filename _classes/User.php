<?php
class User
{
    public $idUser;
    public $loginUser;
    public $passwordUser;

    function __construct($idUser, $loginUser, $passwordUser)
    {
        $this->idUser = $idUser;
        $this->loginUser = $loginUser;
        $this->passwordUser = $passwordUser;
    }

    static function addUser($loginUser, $passwordUser)
    {
        global $db;
        $searchUserExist = $db->prepare('SELECT * FROM user WHERE loginUser=?');
        $searchUserExist->execute([$loginUser]);
        $nbUser = $searchUserExist->rowCount();
        if ($nbUser > 0) {
            return "Error";
        } else {
            $addUser = $db->prepare('INSERT INTO user(loginUser, passwordUser) VALUES(?, ?)');
            $addUser->execute([$loginUser, $passwordUser]);
            if ($addUser) {
                return "Success";
            } else {
                return "Error";
            }
        }
    }

    static function updateUser($idUser, $loginUser, $passwordUser)
    {
        global $db;
        $updateUser = $db->prepare('UPDATE user SET loginUser=?, passwordUser=? WHERE idUser=?');
        $updateUser->execute([$loginUser, $passwordUser, $idUser]);
        if ($updateUser) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function removeUser($idUser)
    {
        global $db;
        $removeUser = $db->prepare('DELETE FROM user WHERE idUser=?');
        $removeUser->execute([$idUser]);
        if ($removeUser) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function getAllUser($idUser)
    {
        global $db;
        $getAllUser = $db->query('SELECT * FROM user WHERE idUser <> "$idUser"');
        if ($getAllUser) {
            return $getAllUser->fetchAll();
        } else {
            return "Error recovery impossible";
        }
    }

    static function getOneUser($idUser)
    {
        global $db;
        $getOneUser = $db->prepare('SELECT * FROM user WHERE idUser=?');
        $getOneUser->execute([$idUser]);
        if ($getOneUser) {
            return $getOneUser->fetch();
        } else {
            return "Error recovery impossible";
        }
    }

    static function connexionUser($loginUser, $passwordUser)
    {
        global $db;
        $req = $db->query("SELECT * FROM user WHERE loginUser = '$loginUser' AND passwordUser = '$passwordUser'");
        $rep = $req->fetch();
        if ($rep['idUser']) {
            return "Success";
        } else {
            return "Error";
        }
    }

    static function getUserByUsername($loginUser)
    {
        global $db;
        $getOneUser = $db->prepare('SELECT * FROM user WHERE loginUser=?');
        $getOneUser->execute([$loginUser]);
        if ($getOneUser) {
            return $getOneUser->fetch();
        } else {
            return "Error recovery impossible";
        }
    }
}
