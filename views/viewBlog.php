<?php ob_start();?>
    <?php $title = 'Articles'; ?>
    <?php foreach ($m as $result): ?>
        <div class="container-fluid bg-1 text-center" style=" margin-top:0; padding-top: 5px; width: 80%; height: 200px">
            <div class="col-md-12">
                <div class="row">
                    <h1 class="pull-center"><?= $result->getTitle()?></h1>
                </div>
                <br/>
                <div class="row">
                    <section class="center">
                        <p style="width: 100%; height: 50px; overflow: hidden;"><?= $result->getChapo()?></p>
                    </section>
                </div>
                <div class="row">
                    <span class="pull-right">
                        <a class="btn btn-primary details" role="button" href="<?="articleDetails/".$result->getId();?>">
                            Read more
                        </a>
                    </span>
                    <div class="pull-left">
                        <span class="label label-info">Published the <i><?= $result->getDate()?></i> by <i><?= $result->getName()?></i></span>
                    </div>
                </div>
                <hr/>
            </div>
        </div>
    <?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php include_once '_template.php';?>


