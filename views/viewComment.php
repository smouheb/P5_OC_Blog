<?php ob_start();?>
<?php $titlecomment = 'Comments :'; ?>
<?php foreach ($com as $c): ?>
    <?php $idcomment = $c->getIdComment()?>
    <?php $id = (int)$_GET['id'] ?>
    <div class="container-fluid bg-1 text-center">
        <form method ="POST" action="<?="../Controler/commentDelOrUpdate.php?idcomment=".$idcomment."&id=".$id;?>">
            <div class="row">
                <div class="col-sm-offset-6">
                    <div class="col-lg-2 col-md-3 col-sm-2"><?= $c->getDate()?></div>
                    <div class="col-lg-2 col-md-4 col-sm-2"><?= $c->getName()?></div>
                    <div class="col-lg-3 col-md-4 col-sm-3"><?= $c->getComment()?></div>
                    <div>
                        <div type="button" class="col-sm-0.5 btn btn-primary editField" name="edit">Edit</div>
                        <button type="submit" class="col-sm-0.5 btn btn-primary" name="delete">Delete</button>
                    </div>
                    <br>
                    <textarea rows="2" class="col-lg-offset-3 col-lg-3 col-md-4 col-sm-3 hiddenField" style="display: none; color: black;" name="newcomment"></textarea>
                    <button type="submit" class="col-lg-1 col-md-4 col-sm-1 btn btn-primary hiddenField" style="display: none" name="update">Update</button>
                </div>
            </div>
        </form>
    </div>
<?php endforeach;?>
<?php $comment = ob_get_clean();?>
