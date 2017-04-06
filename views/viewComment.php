<?php ob_start();?>
<?php foreach ($comments as $result): ?>
    <h3><?= $result->getName() ?></h3>
    <div class="container-fluid bg-1 text-center">
        <div class="row">
            <div class="col-sm-1"><?= $result->getDate()?></div>
            <div class="col-sm-12"><?= $result->getComment()?></div>
        </div>
    </div>
<?php endforeach; ?>
<?php $comment = ob_get_clean();?>
