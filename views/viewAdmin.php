<?php ob_start();?>
<?php $title = 'Article Management'; ?>
<?php foreach ($r as $result): ?>
    <?php $idarticle = $result->getId()?>
    <form method="post" action="<?="../index.php/articleUpdate/".urlencode($idarticle)?>">
        <tr>
            <td class="id">
                <div>
                    <?= $idarticle ?>
                </div>
            </td>
            <td>
                <div style="width: 150px; overflow-wrap: break-word">
                    <?= $result->getTitle()?>
                </div>
                <textarea rows="10"  class="col-md-8 newa" name="value[title]"  style="display: none; width:150px ;color: #2f2f2f;" minlength="4" maxlength="50" required>
                    <?= $result->getTitle()?>
                </textarea>
            </td>
            <td>
                <div style="width: 200px; overflow-wrap: break-word">
                    <?= $result->getChapo()?>
                </div>
                <textarea rows="10"  class="col-md-8 newa" name="value[chapo]" style="display: none; width: 200px; color: #2f2f2f;" minlength="50" maxlength="150" required>
                    <?= $result->getChapo()?>
                </textarea>
            </td>
            <td>
                <div style="height: 100%; width: 100%;">
                    <?= $result->getContent()?>
                </div>
                <textarea rows="10"  class="col-md-8 newa" name="value[content]" style="display: none; color: #2f2f2f" minlength="50" required>
                    <?= $result->getContent()?>
                </textarea>
                <button type="submit" class="col-sm-0.5 newa btn btn-primary uppost" style="display: none;">
                    Update
                </button>
            </td>
            <td class="col-md-2">
                <div type="button" class="col-sm-0.5 btn btn-primary editField">
                    Edit
                </div>
                <button role="button" class="col-sm-0.5 btn btn-primary delpost">
                    <a style="color: inherit; text-decoration: none;" href="<?="../index.php/articleDelete/".urlencode($idarticle)?>">
                        Delete
                    </a>
                </button>
            </td>
        </tr>
    </form>
<?php endforeach;?>
<?php $content = ob_get_clean();?>
<?php include_once '_templateArticleInsert.php';?>