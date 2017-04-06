<?php ob_start();?>
    <?php $title = 'List of Posts'; ?>
    <?php foreach ($m as $result): ?>
        <div class="container-fluid bg-1 text-center">
            <div class="row">
                <div class="col-sm-1"><?= $result->getTitle()?></div>
                <div class="col-sm-5"><?= $result->getContent()?></div>
                <a class="btn btn-primary" href="<?="../Controler/articleDetails.php?id=".$result->getId();?>" role="button">
                    More
                </a>
                <div class="col-sm-1"></div>
            </div>
        </div>
    <?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php include_once 'template.php';?>
<!--Add button to add post -->



