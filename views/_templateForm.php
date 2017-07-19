<?php require "header.php"?>
        <div class="container-fluid bg-1 text-center">
            <h3 class="margin"><?= $title ?></h3>
            <br>
            <div class="row">
                <p><?= $content;?></p>
            </div>
        </div>
        <div class="container-fluid bg-2" style="padding-top: 0; margin: 0;">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="pull-center"><?= $titlecomment ?></h3>
                    <div>
                        <div><?= $comment; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php require "footer.php"?>
    </body>
</html>