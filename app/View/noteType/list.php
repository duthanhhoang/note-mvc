<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note Type List</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <?php if (!empty($noteTypes)):?>
        <?php foreach ($noteTypes as $noteType):?>
            <tr>
                <td><?php echo $noteType->id ?></td>
                <td><?php echo $noteType->name ?></td>
                <td><?php echo $noteType->description ?></td>
            </tr>
        <?php endforeach;?>
    <?php endif;?>
</table>
</body>
</html>
<?php
