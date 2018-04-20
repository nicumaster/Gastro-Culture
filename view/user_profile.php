<?php foreach ($userdata as $user): ?>
    <div class="panel panel-default">
        <div class="panel-heading"><?= $user->firstname; ?> <?= $user->lastname; ?></div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading"><img src="<?= $user->user_picture; ?>"></div>
    </div>
		<?php endforeach ?>

<form action="upload" method="post" enctype="multipart/form-data">
    <input type="file" name="datei"><br>
    <input type="submit" value="Hochladen">
</form>
<?php
    if(isset($_GET['uploaderror'])) {
        if($_GET['uploaderror'] == 'type') {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                <p>Diese Datei ist als Bild nicht geeignet.</p>
             </div>";
        } else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                <p>Diese Datei ist zu gross.</p>
             </div>";
        }

    }
?>