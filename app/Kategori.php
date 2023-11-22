<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Kategori extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM category";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $category_name = $_POST['category_name'];

        $sql = "INSERT INTO category (category_name) VALUES (:category_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":category_name", $category_name);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM category WHERE category_id=:category_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":category_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $category_name = $_POST['category_name'];
        $category_id = $_POST['category_id'];

        $sql = "UPDATE category SET category_name=:category_name WHERE category_id=:category_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":category_name", $category_name);
        $stmt->bindParam(":category_id", $category_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM category WHERE category_id=:category_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":category_id", $id);
        $stmt->execute();

    }

}