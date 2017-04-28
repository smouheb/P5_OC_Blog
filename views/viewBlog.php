<?php ob_start();?>
    <?php $title = 'Articles'; ?>
    <?php foreach ($m as $result): ?>
        <div class="container-fluid bg-1 text-center" style="width: 80%; height: 400px">
            <div class="col-md-12">
                <div class="row">
                    <h1 class="col-sm-2"><?= $result->getTitle()?></h1>
                </div>
                <div class="row">
                    <div class="pull-left">
                        <span class="badge">Date<?= $result->getDate()?></span>
                    </div>
                    <div>
                        <p style="width: 500px; height: 200px; display: inline-block ; overflow: hidden"><?= $result->getContent()?></p>
                    </div>
                    <span class="pull-right">
                        <a class="btn btn-primary" href="<?="../Controler/articleDetails.php?id=".$result->getId();?>" role="button">
                            Read more
                        </a>
                    </span>
                    <br/>
                </div>
                <hr/>
            </div>
        </div>
    <?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php include_once '_template.php';?>
<!--Add button to add post -->



