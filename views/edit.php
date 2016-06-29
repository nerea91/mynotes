<?php
$aux = (isset($_POST['nota'])) ? $_POST['nota'] :$_GET['nota'];

$archivo = (isset($_POST['file'])) ? $_POST['file'] :file_get_contents($aux);

if(count($_POST))
{
    $result = file_put_contents($aux, $archivo);
}

?>
<div class="row">
        <h3 class="text-center">Edit</h3>
        <?php if(isset($result) and $result): ?>
            <?php header('Location: ' .'show.php?nota='.$aux); ?>
        <?php elseif(isset($result)): ?>
            <div class="flash-alert alert-box alert radius" data-alert>
            Error updating file
            <a class="close">&times;</a>
        </div>
        <?php endif ?>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>"  method="POST">
            <div>
                <textarea name ="file" rows="10" cols="50" name="file"><?= $archivo ?> </textarea>
                <input type="hidden" name="nota" value="<?= $aux ?>"/>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <input type="submit" value="Update" class="button expand">
                </div>
                <div class="large-6 columns">
                    <a class="secondary button expand" href="/">Cancel</a>
                </div>
            </div>
        </form>
</div>
