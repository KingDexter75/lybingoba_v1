<?php

namespace _classes;

class Staff
{
    public $idStaff;
    public $nomStaff;
    public $gradeStaff;
    public $photoStaff;
    public $descriptionStaff;

    function __construct($idStaff, $nomStaff, $gradeStaff, $photoStaff, $descriptionStaff)
    {
        $this->idStaff = $idStaff;
        $this->photoStaff = $photoStaff;
        $this->nomStaff = $nomStaff;
        $this->gradeStaff = $gradeStaff;
        $this->descriptionStaff = $descriptionStaff;
    }

    static function addStaff($nomStaff, $gradeStaff, $photoStaff, $descriptionStaff)
    {
        global $db;
        $searchStaffExist = $db->prepare('SELECT * FROM staff WHERE nomStaff=?');
        $searchStaffExist->execute([$nomStaff]);
        $nbStaff = $searchStaffExist->rowCount();
        if ($nbStaff > 0) {
            return "Error the staff information existing";
        } else {
            $addStaff = $db->prepare('INSERT INTO staff(nomStaff, gradeStaff, photoStaff, descriptionStaff) VALUES(?, ?, ?, ?)');
            $addStaff->execute([$nomStaff, $gradeStaff, $photoStaff, $descriptionStaff]);
            if ($addStaff) {
                return "Success";
            } else {
                return "Error verify information";
            }
        }
    }

    static function updateStaff($idStaff, $nomStaff, $gradeStaff, $photoStaff, $descriptionStaff)
    {
        global $db;
        $updateStaff = $db->prepare('UPDATE staff SET nomStaff=?, gradeStaff=? photoStaff=?, descriptionStaff=? WHERE idStaff=?');
        $updateStaff->execute([$nomStaff, $gradeStaff, $photoStaff, $descriptionStaff, $idStaff]);
        if ($updateStaff) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function removeStaff($idStaff)
    {
        global $db;
        $removeStaff = $db->prepare('DELETE FROM staff WHERE idStaff=?');
        $removeStaff->execute([$idStaff]);
        if ($removeStaff) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function getAllStaff()
    {
        global $db;
        $getAllStaff = $db->query('SELECT * FROM staff');
        if ($getAllStaff) {
            return $getAllStaff->fetchAll();
        } else {
            return "Error recovery impossible";
        }
    }

    static function getOneStaff($idStaff)
    {
        global $db;
        $getOneStaff = $db->prepare('SELECT * FROM staff WHERE idStaff=?');
        $getOneStaff->execute([$idStaff]);
        if ($getOneStaff) {
            return $getOneStaff->fetch();
        } else {
            return "Error recovery impossible";
        }
    }
}
