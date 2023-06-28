<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=note">Note</a>
<a href="index.php?page=note-type">NoteType</a>

</body>
</html>

<?php


require __DIR__ . "/vendor/autoload.php";

$page = $_REQUEST["page"] ?? '';

use App\Controller\NoteController;
use App\Controller\NoteTypeController;

$noteTypeController = new NoteTypeController();
$noteController = new NoteController();

switch ($page) {
    case "note":
        $noteController->showAllNote();
        break;
    case "note-type":
        $noteTypeController->showAllNoteType();
        break;
    case "note-detail":
        if(isset($_REQUEST["id"])){
            $id = $_REQUEST["id"];
            $noteController->showNote($id);
        }
        break;
    case "add-note":
        $noteController->addNote();
        break;
    default:
        $noteController->showAllNote();
}


