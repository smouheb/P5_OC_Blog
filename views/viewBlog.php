<?php ob_start();?>
    <?php $title = 'List of Posts'; ?>
    <?php foreach ($articles as $article): ?>
        <div class="container-fluid bg-1 text-center">
            <div class="row">
                <div class="col-sm-1">
                    <img src="../img/<?=$article['images']?>" class="img-responsive img-circle margin" style="display:inline" alt="MyPicture" width="150" height="350">
                </div>
                <div class="col-sm-2"><?= $article['title']?></div>
                <div class="col-sm-5"><?= $article['content']?></div>
                <div class="col-sm-1" ><a href="<?="../controller/ControlerModel.php?id=".$article['id']?>">More</a></div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    <?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php include_once 'template.php';?>
<!--Add button to add post -->



