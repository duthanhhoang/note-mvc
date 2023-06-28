<?php

namespace App\Controller;

use App\Model\NoteType;

class NoteTypeController
{
    protected $noteTypeModel;
    public function __construct()
    {
        $this->noteTypeModel = new NoteType();
    }

    public function showAllNoteType()
    {
        $noteTypes = $this->noteTypeModel->getAll();
        include_once "app/View/noteType/list.php";
    }
}