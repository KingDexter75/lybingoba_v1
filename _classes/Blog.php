<?php
class Blog
{
    public $idBlog;
    public $photoBlog;
    public $contenuBlog;
    public $dateBlog;
    public $titreBlog;

    function __construct($idBlog, $photoBlog, $contenuBlog, $dateBlog, $titreBlog)
    {
        $this->idBlog = $idBlog;
        $this->dateBlog = $dateBlog;
        $this->photoBlog = $photoBlog;
        $this->contenuBlog = $contenuBlog;
        $this->titreBlog = $titreBlog;
    }

    static function addBlog($photoBlog, $contenuBlog, $dateBlog, $titreBlog)
    {
        global $db;
        $searchBlogExist = $db->prepare('SELECT * FROM blog WHERE dateBlog=? AND titreBlog=?');
        $searchBlogExist->execute([$dateBlog, $titreBlog]);
        $nbBlog = $searchBlogExist->rowCount();
        if ($nbBlog > 0) {
            return "Error";
        } else {
            $addBlog = $db->prepare('INSERT INTO blog(photoBlog, contenuBlog, dateBlog, titreBlog) VALUES(?, ?, ?, ?)');
            $addBlog->execute([$photoBlog, $contenuBlog, $dateBlog, $titreBlog]);
            if ($addBlog) {
                return "Success";
            } else {
                return "Error verify information";
            }
        }
    }

    static function updateBlog($idBlog, $photoBlog, $contenuBlog, $dateBlog, $titreBlog)
    {
        global $db;
        $updateBlog = $db->prepare('UPDATE blog SET photoBlog=?, contenuBlog=? dateBlog=?, titreBlog=? WHERE idBlog=?');
        $updateBlog->execute([$photoBlog, $contenuBlog, $dateBlog, $titreBlog, $idBlog]);
        if ($updateBlog) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function removeBlog($idBlog)
    {
        global $db;
        $removeBlog = $db->prepare('DELETE FROM blog WHERE idBlog=?');
        $removeBlog->execute([$idBlog]);
        if ($removeBlog) {
            return "Success";
        } else {
            return "Error verify information";
        }
    }

    static function getAllBlog()
    {
        global $db;
        $getAllBlog = $db->query('SELECT * FROM blog');
        if ($getAllBlog) {
            return $getAllBlog->fetchAll();
        } else {
            return "Error recovery impossible";
        }
    }

    static function getOneBlog($idBlog)
    {
        global $db;
        $getOneBlog = $db->prepare('SELECT * FROM blog WHERE idBlog=?');
        $getOneBlog->execute([$idBlog]);
        if ($getOneBlog) {
            return $getOneBlog->fetch();
        } else {
            return "Error recovery impossible";
        }
    }
}
