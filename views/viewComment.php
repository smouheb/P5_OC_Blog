<?php ob_start();?>
<?php foreach ($com as $c): ?>
    <?php $idcomment = $c->getIdComment() ?>
    <?php $id = (int)$_GET['id'] ?>
    <div class="container-fluid bg-1 text-center">
        <form method ="POST" action="<?="../Controler/commentDelOrUpdate.php?idcomment=".$idcomment."&id=".$id;?>">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-1"><?= $c->getDate()?></div>
                <div class="col-sm-1"><?= $c->getName()?></div>
                <div class="col-sm-3"><?= $c->getComment()?>
                    <input type="text" class="hiddenField" style="display: none; color:black" name="newcomment">
                    <button type="submit" class="col-sm-0.5 btn btn-primary hiddenField" style="display: none" name="update">Update</button>
                </div>
                <div>
                    <div type="button" class="col-sm-0.5 btn btn-primary" name="edit" id="editField">Edit</div>
                    <button type="submit" class="col-sm-0.5 btn btn-primary" name="delete">Delete</button>
                </div>
            </div>
        </form>
    </div>
<?php endforeach;?>
<?php $comment = ob_get_clean();?>
