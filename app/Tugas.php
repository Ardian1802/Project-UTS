<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Tugas extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT tasks.*, project.* FROM tasks, project WHERE tasks.project_id=project.project_id";
    
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
        $title = $_POST['title'];
        $description = $_POST['description'];
        $deadline = $_POST['deadline'];
        $status = $_POST['status'];
        $project_id = $_POST['project_id'];

        $sql = "INSERT INTO tasks (title, description, deadline, status, project_id) VALUES (:title, :description, :deadline, :status, :project_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":deadline", $deadline);
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":project_id", $project_id);
        $stmt->execute();

    }

    public function edit($id)
    {
        $sql = "SELECT tasks.*, project.project_name FROM tasks INNER JOIN project ON tasks.project_id=project.project_id WHERE task_id=:task_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":task_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $deadline = $_POST['deadline'];
        $status = $_POST['status'];
        $project_id = $_POST['project_id'];
        $task_id = $_POST['task_id'];

        $sql = "UPDATE tasks SET title=:title, description=:description, deadline=:deadline, status=:status, project_id=:project_id WHERE task_id=:task_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":deadline", $deadline);
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":project_id", $project_id);
        $stmt->bindParam(":task_id", $task_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tasks WHERE task_id=:task_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":task_id", $id);
        $stmt->execute();

    }

}