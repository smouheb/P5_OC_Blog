<?php ob_start();?>
<?php $titlecomment = 'Comments :'; ?>
<?php foreach ($com as $c): ?>
    <?php $idcomment = $c->getIdComment()?>
    <?php $id = (int)$_GET['id'] ?>
    <div class="container-fluid bg-1 text-center">
        <form method ="POST" action="<?="../Controler/commentDelOrUpdate.php?idcomment=".$idcomment."&id=".$id;?>">
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-1"><?= $c->getDate()?></div>
                <div class="col-sm-2"><?= $c->getName()?></div>
                <div class="col-sm-3"><?= $c->getComment()?></div>
                <textarea rows="2" class="col-sm-offset-7 col-sm-3 hiddenField" style="display: none; color: black;" name="newcomment"></textarea>
                    <button type="submit" class="col-sm-offset-7 col-sm-1 btn btn-primary hiddenField" style="display: none" name="update">Update</button>
                <div>
                    <div type="button" class="col-sm-0.5 btn btn-primary editField" name="edit">Edit</div>
                    <button type="submit" class="col-sm-0.5 btn btn-primary" name="delete">Delete</button>
                </div>
            </div>
        </form>
    </div>
<?php endforeach;?>
<?php $comment = ob_get_clean();?>
