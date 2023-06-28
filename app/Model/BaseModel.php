<?php

namespace App\Model;

class BaseModel
{
    protected $table;
    protected $connect;

    public function __construct()
    {
        $dbConnect = new DBConnect();
        $this->connect = $dbConnect->connect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM $this->table";
            $stmt = $this->connect->query($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE id=".$id;
            $stmt = $this->connect->query($sql);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_OBJ);
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }
    }
}