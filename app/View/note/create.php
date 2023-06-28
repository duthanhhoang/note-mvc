<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD NOTE</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="desc" placeholder="Description">
    <select name="note-type">
        <?php if (isset($noteTypes)) {
            foreach ($noteTypes as $noteType):?>
                <option value="<?php echo $noteType->id?>"><?php echo $noteType->name?></option>
            <?php endforeach;
        } ?>
    </select>
    <button>Add Note</button>
</form>
</body>
</html>
<?php
