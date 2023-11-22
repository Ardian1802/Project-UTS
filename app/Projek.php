<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Projek extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT project.*, category.* FROM project, category WHERE project.category_id=category.category_id";
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
        $project_name = $_POST['project_name'];
        $project_description = $_POST['project_description'];
        $category_id = $_POST['category_id'];

        $sql = "INSERT INTO project (project_name, project_description, category_id) VALUES (:project_name, :project_description, :category_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":project_name", $project_name);
        $stmt->bindParam(":project_description", $project_description);
        $stmt->bindParam(":category_id", $category_id);
        $stmt->execute();

    }

    public function edit($id)
    {
        $sql = "SELECT project.*, category.category_name FROM project INNER JOIN category ON project.category_id=category.category_id WHERE project_id=:project_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":project_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $project_name = $_POST['project_name'];
        $project_description = $_POST['project_description'];
        $category_id = $_POST['category_id'];
        $project_id = $_POST['project_id'];

        $sql = "UPDATE project SET project_name=:project_name, project_description=:project_description, category_id=:category_id WHERE project_id=:project_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":project_name", $project_name);
        $stmt->bindParam(":project_description", $project_description);
        $stmt->bindParam(":category_id", $category_id);
        $stmt->bindParam(":project_id", $project_id);
        $stmt->execute();

    }

    public function delete($id)
    {
        $sql = "DELETE FROM project WHERE project_id=:project_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":project_id", $id);
        $stmt->execute();
    }

}