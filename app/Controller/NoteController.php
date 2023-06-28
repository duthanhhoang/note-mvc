<?php

namespace App\Controller;


use App\Model\NoteModel;
use App\Model\NoteType;

class NoteController
{
    protected $noteModel;
    protected $noteTypeModel;
    public function __construct()
    {
        $this->noteModel = new NoteModel();
        $this->noteTypeModel = new NoteType();
    }

    public function showAllNote()
    {
        $notes = $this->noteModel->getAll();
        include_once "app/View/note/list.php";
    }

    public function showNote($id)
    {
        $note = $this->noteModel->getById($id);
        include_once "app/View/note/detail.php";
    }

    public function addNote(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $noteTypes = $this->noteTypeModel->getAll();
            include_once "app/View/note/create.php";
        }else{
            $this->noteModel->insertNote($_REQUEST);
            header("location: index.php?page=note");
        }
    }
}