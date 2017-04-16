<?php ob_start();?>
<?php foreach ($details as $result): ?>
<h3><?= $result->getTitle() ?></h3>

    <div class="container-fluid bg-1 text-center">
        <div class="row">
            <div class="col-sm-4"><?= $result->getContent()?></div>
        </div>
    </div>
<?php endforeach; ?>
<?php $content = ob_get_clean();?>
