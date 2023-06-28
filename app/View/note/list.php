<div class="container">
    <a href="index.php?page=add-note">Add Note</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Note Type</th>
        </tr>
        <?php if (!empty($notes)):?>
            <?php foreach ($notes as $note):?>
                <tr>
                    <td><?php echo $note->id ?></td>
                    <td><a href="index.php?page=note-detail&id=<?php echo $note->id?>"><?php echo $note->title ?></a></td>
                    <td><?php echo $note->content ?></td>
                    <td><?php echo $note->noteType ?></td>
                </tr>
            <?php endforeach;?>
        <?php endif;?>
    </table>
</div>
<?php
