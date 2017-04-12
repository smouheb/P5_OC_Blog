<?php ob_start();?>
<?php foreach ($com as $c): ?>
    <div class="container-fluid bg-1 text-center">
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-1"><?= $c->getDate()?></div>
            <div class="col-sm-3"><?= $c->getComment()?></div>
            <div>
                <button type="submit" class="col-sm-0.5 btn btn-primary">Edit</button>
                <button type="submit" class="col-sm-0.5 btn btn-primary">Delete</button>
            </div>
        </div>
    </div>
<?php endforeach;?>
<?php $comment = ob_get_clean();?>
