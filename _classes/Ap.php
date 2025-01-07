<?php

namespace _classes;

class Ap
{
    public $idAP;
    public $nomAP;
    public $photoAP;
    public $departementAP;

    function __construct($idAP, $nomAP, $photoAP, $departementAP)
    {
        $this->idAP = $idAP;
        $this->nomAP = $nomAP;
        $this->photoAP = $photoAP;
        $this->departementAP = $departementAP;
    }

    static function addAp($nomAP, $photoAP, $departementAP)
    {
        global $db;
        $searchApExist = $db->prepare('SELECT * FROM AP WHERE nomAP=? AND departementAP=?');
        $searchApExist->execute([$nomAP, $departementAP]);
        $nbAp = $searchApExist->rowCount();
        if ($nbAp > 0) {
            return "Error the AP information existing";
        } else {
            $addAp = $db->prepare('INSERT INTO AP(nomAP, photoAP, departementAP) VALUES(?, ?, ?)');
            $addAp->execute([$nomAP, $photoAP, $departementAP]);
            if ($addAp) {
                return "Success";
            } else {
                return "Error verify information";
            }
        }
    }

    static function updateAp($idAP, $nomAP, $photoAP, $departementAP)
    {
        global $db;
        $updateAp = $db->prepare('UPDATE AP SET nomAP=?, photoAP=?, departementAP=? WHERE idAP=?');
        $updateAp->execute([$nomAP, $photoAP, $departementAP, $idAP]);
        if ($updateAp) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function removeAp($idAP)
    {
        global $db;
        $removeAp = $db->prepare('DELETE FROM AP WHERE idAP=?');
        $removeAp->execute([$idAP]);
        if ($removeAp) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function getAllAp()
    {
        global $db;
        $getAllAp = $db->query('SELECT * FROM AP');
        if ($getAllAp) {
            return $getAllAp->fetchAll();
        } else {
            return "Error recovery impossible";
        }
    }

    static function getOneAp($idAP)
    {
        global $db;
        $getOneAp = $db->prepare('SELECT * FROM AP WHERE idAP=?');
        $getOneAp->execute([$idAP]);
        if ($getOneAp) {
            return $getOneAp->fetch();
        } else {
            return "Error recovery impossible";
        }
    }
}
