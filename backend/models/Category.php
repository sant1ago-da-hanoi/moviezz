<?php
require_once 'models/Model.php';
class Category extends Model {
    public $id;
    public $name;
    public $status;
    public $created_at;
    public $updated_at;

    public function insert(): bool {
        $sql_insert = "INSERT INTO categories(`name`, `status`) VALUES (:name, :status)";
        $obj_insert = $this->connection
          ->prepare($sql_insert);
        $arr_insert = [
          ':name' => $this->name,
          ':status' => $this->status
        ];
        return $obj_insert->execute($arr_insert);
    }

    public function getAll($params = []): array {
    $str_search = 'WHERE TRUE';
    if (isset($params['name']) && !empty($params['name'])) {
      $name = $params['name'];
      $str_search .= " AND `name` LIKE '%$name%'";
    }
    if (isset($params['status'])) {
      $status = $params['status'];
      $str_search .= " AND `status` = $status";
    }
    $sql_select_all = "SELECT * FROM categories $str_search";
    $obj_select_all = $this->connection->prepare($sql_select_all);
    $obj_select_all->execute();
    return $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
  }

    public function getById($id) {
    $sql_select_one = "SELECT * FROM categories WHERE id = $id";
    $obj_select_one = $this->connection
      ->prepare($sql_select_one);
    $obj_select_one->execute();
    $category = $obj_select_one->fetch(PDO::FETCH_ASSOC);
    return $category;
  }

    public function getCategoryById($id) {
    $obj_select = $this->connection
      ->prepare("SELECT * FROM categories WHERE id = $id");
    $obj_select->execute();
    $category = $obj_select->fetch(PDO::FETCH_ASSOC);

    return $category;
  }

    public function update($id): bool {
    $obj_update = $this->connection->prepare("UPDATE categories SET `name` = :name, `status` = :status, `updated_at` = :updated_at WHERE id = $id");
    $arr_update = [
      ':name' => $this->name,
      ':status' => $this->status,
      ':updated_at' => $this->updated_at,
    ];

    return $obj_update->execute($arr_update);
  }

    public function delete($id) {
    $obj_delete = $this->connection
      ->prepare("DELETE FROM categories WHERE id = $id");
    $is_delete = $obj_delete->execute();
    $obj_delete_product = $this->connection
      ->prepare("DELETE FROM products WHERE category_id = $id");
    $obj_delete_product->execute();

    return $is_delete;
  }

    public function countTotal() {
    $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM categories");
    $obj_select->execute();

    return $obj_select->fetchColumn();
  }

    public function getAllPagination($params = []): array
  {
    $limit = $params['limit'];
    $page = $params['page'];
    $start = ($page - 1) * $limit;
    $obj_select = $this->connection
      ->prepare("SELECT * FROM categories LIMIT $start, $limit");
    $obj_select->execute();
    $categories = $obj_select->fetchAll(PDO::FETCH_ASSOC);

    return $categories;
  }
}