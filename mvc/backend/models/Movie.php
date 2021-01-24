<?php
require_once 'models/Model.php';

class Movie extends Model {
    public $id;
    public $idcategory;
    public $title;
    public $image;
    public $lengthm;
    public $movie_type;
    public $actor;
    public $director;
    public $nation;
    public $yeary;
    public $status;
    public $views;
    public $star;
    public $description;
    public $created_at;
    public $updated_at;
    public $str_search = '';
    public $link;

    public function __construct() {
        parent::__construct();
        if (isset($_GET['title']) && !empty($_GET['title'])) {
            $this->str_search .= " AND movies.title LIKE '%{$_GET['title']}%'";
        }
        if (isset($_GET['idcategory']) && !empty($_GET['idcategory'])) {
            $this->str_search .= " AND movies.idcategory = {$_GET['idcategory']}";
        }
    }

    public function getAll() {
        $obj_select = $this->connection
            ->prepare("SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON categories.id = movies.idcategory WHERE TRUE $this->str_search ORDER BY movies.created_at DESC");
        $arr_select = [];
        $obj_select->execute($arr_select);
        return $obj_select->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllPagination($arr_params) {
        $limit = $arr_params['limit'];
        $page = $arr_params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection->prepare("SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON categories.id = movies.idcategory WHERE TRUE $this->str_search ORDER BY movies.updated_at DESC, movies.created_at DESC LIMIT $start, $limit");
        $arr_select = [];
        $obj_select->execute($arr_select);
        return $obj_select->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countTotal() {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM movies WHERE TRUE $this->str_search");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }

    public function insert() {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO movies(idcategory, title, image, lengthm, nation, yeary, director, movie_type, link, status) VALUES (:idcategory, :title, :image, :lengthm, :nation, :yeary, :director, :movie_type, :link, :status)");
        $arr_insert = [
            ':idcategory' => $this->idcategory,
            ':title' => $this->title,
            ':image' => $this->image,
            ':lengthm' => $this->lengthm,
            ':nation' => $this->nation,
            ':yeary' => $this->yeary,
            ':director' => $this->director,
            ':movie_type' => $this->movie_type,
            ':link' => $this->link,
            ':status' => $this->status,
        ];
        return $obj_insert->execute($arr_insert);
    }

    public function getById($id) {
        $obj_select = $this->connection->prepare("SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON movies.idcategory = categories.id WHERE movies.id = $id");

        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id) {
        $obj_update = $this->connection->prepare("UPDATE movies SET idcategory=:idcategory, title=:title, image=:image, lengthm=:lengthm, nation=:nation, yeary=:yeary, director=:director, movie_type=:movie_type, updated_at=:updated_at WHERE id = $id");
        $arr_update = [
            ':idcategory' => $this->idcategory,
            ':title' => $this->title,
            ':image' => $this->image,
            ':lengthm' => $this->lengthm,
            ':nation' => $this->nation,
            ':yeary' => $this->yeary,
            ':director' => $this->director,
            ':movie_type' => $this->movie_type,
            ':status' => $this->status,
        ];
        return $obj_update->execute($arr_update);
    }

    public function delete($id) {
        $obj_delete = $this->connection->prepare("DELETE FROM movies WHERE id = $id");
        return $obj_delete->execute();
    }
}