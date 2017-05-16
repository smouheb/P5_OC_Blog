<?php ob_start();?>
<?php $title = 'Article Management'; ?>
<?php foreach ($r as $result): ?>
    <?php $idarticle = $result->getId()?>
    <form method="post" action="<?="../Controler/articleDelOrUpdate.php?idarticle=".urlencode($idarticle)?>">
        <tr>
            <td class="id">
                <div>
                    <?= $idarticle ?>
                </div>
            </td>
            <td>
                <?= $result->getTitle()?>
            </td>
            <td>
                <div style="height: 110px; overflow: hidden">
                    <?= $result->getContent()?>
                </div>
                <textarea rows="10"  class="col-md-8 newa" name="newarticle" style="display: none; color: #2f2f2f">
                    <?= $result->getContent()?>
                </textarea>
                <button  type="submit" class="col-sm-0.5 newa btn btn-primary" style="display: none;" name="update">
                    Update
                </button>
            </td>
            <td class="col-md-2">
                <div type="button" class="col-sm-0.5 btn btn-primary editField">
                    Edit
                </div>
                <button type="submit" class="col-sm-0.5 btn btn-primary" name="delete">
                    Delete
                </button>
            </td>
        </tr>
    </form>
<?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php include_once '_templateArticleInsert.php';?>