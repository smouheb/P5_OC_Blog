<?php ob_start();?>
<?php $titlecomment = 'Comments :'; ?>
<?php foreach ($com as $c): ?>
    <?php $idcomment = $c->getIdComment()?>
    <?php $id = (int)$_GET['id'] ?>
    <div class="container-fluid bg-1 text-center" style="padding: 20px;">
        <form method ="POST" action="<?="../Controler/commentDelOrUpdate.php?idcomment=".$idcomment."&id=".$id;?>">
            <div class="row">
                <div class="label label-info pull-left"><?= $c->getDate()?> by <?= $c->getName()?></div>
            </div>
            <br/>
            <div class="row">
                <p style="display: inline" class="pull-left"><?= $c->getComment()?></p>
                <br/>
                <div class="pull-left">
                    <div type="button" class=" btn btn-primary editField" name="edit">Edit</div>
                    <button type="submit" class="col-sm-0.5 btn btn-primary" name="delete">Delete</button>
                </div>
                <br/>
                <br/>
                <textarea rows="5" class="col-md-2 hiddenField pull-center" id="texttiny" style="display: none; color: black;" name="x"></textarea>
                <button type="submit" class="col-lg-2 col-md-4 col-sm-1 btn btn-primary hiddenField pull-center" style="display: none" name="update">Update</button>
            </div>
        </form>
    </div>
<?php endforeach;?>
<?php $comment = ob_get_clean();?>
