<?php

namespace _classes;

class Document
{
    public $idDocument;
    public $nomDocument;
    public $trimestreDocument;

    function __construct($idDocument, $nomDocument, $trimestreDocument)
    {
        $this->idDocument = $idDocument;
        $this->nomDocument = $nomDocument;
        $this->trimestreDocument = $trimestreDocument;
    }

    static function addDocument($nomDocument, $trimestreDocument)
    {
        global $db;
        $searchDocumentExist = $db->prepare('SELECT * FROM document WHERE nomDocument=? AND trimestreDocument=?');
        $searchDocumentExist->execute([$nomDocument, $trimestreDocument]);
        $nbDocument = $searchDocumentExist->rowCount();
        if ($nbDocument > 0) {
            return "Error the document information existing";
        } else {
            $addDocument = $db->prepare('INSERT INTO document(nomDocument, trimestreDocument) VALUES(?, ?)');
            $addDocument->execute([$nomDocument, $trimestreDocument]);
            if ($addDocument) {
                return "Success";
            } else {
                return "Error verify information";
            }
        }
    }

    static function updateDocument($idDocument, $nomDocument, $trimestreDocument)
    {
        global $db;
        $updateDocument = $db->prepare('UPDATE document SET nomDocument=?, trimestreDocument=? WHERE idDocument=?');
        $updateDocument->execute([$nomDocument, $trimestreDocument, $idDocument]);
        if ($updateDocument) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function removeDocument($idDocument)
    {
        global $db;
        $removeDocument = $db->prepare('DELETE FROM document WHERE idDocument=?');
        $removeDocument->execute([$idDocument]);
        if ($removeDocument) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function getAllDocument()
    {
        global $db;
        $getAllDocument = $db->query('SELECT * FROM document');
        if ($getAllDocument) {
            return $getAllDocument->fetchAll();
        } else {
            return "Error recovery impossible";
        }
    }

    static function getOneDocument($idDocument)
    {
        global $db;
        $getOneDocument = $db->prepare('SELECT * FROM document WHERE idDocument=?');
        $getOneDocument->execute([$idDocument]);
        if ($getOneDocument) {
            return $getOneDocument->fetch();
        } else {
            return "Error recovery impossible";
        }
    }
}
