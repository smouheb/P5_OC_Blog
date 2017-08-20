<?php ob_start();?>
<?php foreach ($details as $result): ?>
<h3><?= $result->getTitle() ?></h3>

    <div class="container-fluid bg-1 text-center details" style="@media screen { overflow: scroll;}">
        <p

        ><?= $result->getContent();?></p>
    </div>
<?php endforeach; ?>
<?php $content = ob_get_clean();?>
<?php include_once '_templateArticleDetails.php';?>
