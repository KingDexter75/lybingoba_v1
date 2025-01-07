<?php

namespace _classes;

class Examen
{
    public $idExamen;
    public $typeExamen;
    public $fichierExamen;
    public $descriptionExamen;

    function __construct($idExamen, $typeExamen, $fichierExamen, $descriptionExamen)
    {
        $this->idExamen = $idExamen;
        $this->typeExamen = $typeExamen;
        $this->fichierExamen = $fichierExamen;
        $this->descriptionExamen = $descriptionExamen;
    }

    static function addExamen($typeExamen, $fichierExamen, $descriptionExamen)
    {
        global $db;
        $searchexamenExist = $db->prepare('SELECT * FROM examen WHERE typeExamen=?');
        $searchexamenExist->execute([$typeExamen]);
        $nbExamen = $searchexamenExist->rowCount();
        if ($nbExamen > 0) {
            return "Error the examen information existing";
        } else {
            $addExamen = $db->prepare('INSERT INTO examen(typeExamen, fichierExamen, descriptionExamen) VALUES(?, ?, ?)');
            $addExamen->execute([$typeExamen, $fichierExamen, $descriptionExamen]);
            if ($addExamen) {
                return "Success";
            } else {
                return "Error verify information";
            }
        }
    }

    static function updateExamen($idExamen, $typeExamen, $fichierExamen, $descriptionExamen)
    {
        global $db;
        $updateExamen = $db->prepare('UPDATE examen SET typeExamen=?, fichierExamen=?, descriptionExamen=? WHERE idExamen=?');
        $updateExamen->execute([$typeExamen, $fichierExamen, $descriptionExamen, $idExamen]);
        if ($updateExamen) {
            return "Success";
        } else {
            return "Error verify information";
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
            return "Error verify information";
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
