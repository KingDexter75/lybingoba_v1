<?php

class Examen
{
    public $idExamen;
    public $typeExamen;
    public $fichierExamen;
    public $pourcentage;
    public $nombrePresentes;
    public $nombreAdmis;
    public $nombreEchoue;
    public $sessionExamen;

    function __construct($idExamen, $typeExamen, $sessionExamen, $fichierExamen, $pourcentage, $nombrePresentes, $nombreAdmis, $nombreEchoue)
    {
        $this->idExamen = $idExamen;
        $this->typeExamen = $typeExamen;
        $this->sessionExamen = $sessionExamen;
        $this->fichierExamen = $fichierExamen;
        $this->pourcentage = $pourcentage;
        $this->nombrePresentes = $nombrePresentes;
        $this->nombreAdmis = $nombreAdmis;
        $this->nombreEchoue = $nombreEchoue;
    }

    static function addExamen($typeExamen, $sessionExamen, $fichierExamen, $pourcentage, $nombrePresentes, $nombreAdmis, $nombreEchoue)
    {
        global $db;
        $searchexamenExist = $db->prepare('SELECT * FROM examen WHERE typeExamen=? AND sessionExamen=?');
        $searchexamenExist->execute([$typeExamen,$sessionExamen]);
        $nbExamen = $searchexamenExist->rowCount();
        if ($nbExamen > 0) {
            return "The examen information existing";
        } else {
            $addExamen = $db->prepare('INSERT INTO examen(typeExamen, sessionExamen, fichierExamen, pourcentage, nombrePresentes, nombreAdmis, nombreEchoue) VALUES(?, ?, ?, ?, ?, ?, ?)');
            $addExamen->execute([$typeExamen, $sessionExamen, $fichierExamen, $pourcentage, $nombrePresentes, $nombreAdmis, $nombreEchoue]);
            if ($addExamen) {
                return "Success";
            } else {
                return "Error";
            }
        }
    }

    static function updateExamen($idExamen, $typeExamen, $sessionExamen, $fichierExamen, $pourcentage, $nombrePresentes, $nombreAdmis, $nombreEchoue)
    {
        global $db;
        $updateExamen = $db->prepare('UPDATE examen SET typeExamen=?, sessionExamen=?, fichierExamen=?, pourcentage=?, nombrePresentes=?, nombreAdmis=?, nombreEchoue=? WHERE idExamen=?');
        $updateExamen->execute([$typeExamen, $sessionExamen, $fichierExamen, $pourcentage, $nombrePresentes, $nombreAdmis, $nombreEchoue, $idExamen]);
        if ($updateExamen) {
            return "Success";
        } else {
            return "Error";
        }
    }

    static function removeExamen($idExamen)
    {
        global $db;
        $removeExamen = $db->prepare('DELETE FROM examen WHERE idExamen=?');
        $removeExamen->execute([$idExamen]);
        if ($removeExamen) {
            return "Success";
        } else {
            return "Error";
        }
    }

    static function getAllExamen()
    {
        global $db;
        $getAllExamen = $db->query('SELECT * FROM examen');
        if ($getAllExamen) {
            return $getAllExamen->fetchAll();
        } else {
            return "Error recovery impossible";
        }
    }

    static function getOneExamen($idExamen)
    {
        global $db;
        $getOneExamen = $db->prepare('SELECT * FROM examen WHERE idExamen=?');
        $getOneExamen->execute([$idExamen]);
        if ($getOneExamen) {
            return $getOneExamen->fetch();
        } else {
            return "Error recovery impossible";
        }
    }
}
