<?php ob_start();?>
    <?php $title = 'List of Posts'; ?>
    <?php foreach ($m as $result): ?>
        <div class="container-fluid bg-1 text-center">
            <div class="col-md-12">
                <h1 class="col-sm-2"><?= $result->getTitle()?></h1>
                <div class="pull-left">
                    <span class="badge">Posted <?= $result->getDate()?></span>
                </div>
                <p><?= $result->getContent()?></p>
                <span class="pull-right">
                    <a class="btn btn-primary" href="<?="../Controler/articleDetails.php?id=".$result->getId();?>" role="button">
                        Read more
                    </a>
                </span>
                <br/>
                <hr/>
            </div>
        </div>
    <?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php include_once '_template.php';?>
<!--Add button to add post -->



