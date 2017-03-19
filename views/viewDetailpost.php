
<?php ob_start();?>
<?php $title = $_GET['title']; ?>
    <div class="container-fluid bg-1 text-center">
        <div class="row">
            <div class="col-sm-12">
                <img src="../img/<?=$articles['images']?>" class="img-responsive img-circle margin" style="display:inline" alt="MyPicture" width="150" height="350">
            </div>
            <div class="col-sm-12"><?= $articles['content']?></div>
        </div>
    </div>
<?php $content = ob_get_clean();?>
<?php include_once 'template.php';?>
