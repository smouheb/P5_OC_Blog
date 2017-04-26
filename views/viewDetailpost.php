<?php ob_start();?>
<?php foreach ($details as $result): ?>
<h3><?= $result->getTitle() ?></h3>

    <div class="container-fluid bg-1 text-center">
        <p><?= $result->getContent()?></p>
    </div>
<?php endforeach; ?>
<?php $content = ob_get_clean();?>
