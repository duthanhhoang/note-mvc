<?php

namespace App\Model;

class NoteModel extends BaseModel
{
    protected $table = "notes";


    public function getAll()
    {
        try {
            $sql = "SELECT $this->table.*, noteTypes.name as noteType FROM $this->table INNER JOIN `noteTypes` ON $this->table.noteType_id = noteTypes.id";
            $stmt = $this->connect->query($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }
    }
    public function insertNote($request)
    {
        try {
            $sql = "INSERT INTO $this->table(`title`,`content`,`noteType_id`) VALUE (?,?,?)";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(1, $request["title"]);
            $stmt->bindParam(2, $request["desc"]);
            $stmt->bindParam(3, $request["note-type"]);
            $stmt->execute();
        } catch (\Exception $exception) {
            die($exception->getMessage());
        }
    }
}