<?php require "header.php"?>
        <div class="col-md-12 container-fluid bg-2">
            <h3 class="text-center"><?= $title ?></h3>
            <br/>
            <table class="table table-bordered bg-1 text-center">
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>chapo</td>
                    <td>content</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td><?= $content; ?></td>
                </tr>
            </table>
        </div>
        <div class="container-fluid bg-2 col-xs-12">
            <h3>Add New Articles</h3>
            <form class="bg-1 " method="POST" action="<?="../index.php/articleInsert"?>">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-2">
                        <div class="form-group">
                            <label for="enterYourName">Name</label>
                            <input class="form-control inp" name="value[name]" type="text"  minlength="4" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-2">
                        <div class="form-group">
                            <label for="enterYourName">Title</label>
                            <input class="form-control inp" name="value[title]" type="text" minlength="5" maxlength="50" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-6">
                        <div class="form-group">
                            <label for="enterYourName">Chapo</label>
                            <textarea class="form-control inp" rows="2" name="value[chapo]" minlength="50" maxlength="150" required></textarea>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <label class="col-sm-offset-1 col-sm-12" for="enterText">Content</label>
                        <div class="col-sm-offset-1 col-sm-6">
                            <textarea class="form-control inp" rows="8" name="value[content]" minlength="50" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="col-sm-offset-1 btn btn-primary sub">Submit</button>
                    <br/>
                </div>
            </form>
        </div>
        <!-- Footer -->
<?php require "footer.php"?>
        <script>
            $(function () {
                //to sho the hidden fields to edit the posts
                $('.editField').on('click', function () {
                    $(this).closest('tr').find('.newa').toggle();
                });

                // to disabel the submit button to post an article
                $('.sub').prop('disabled',true);

                //When the user press a button on the keybord the submit button is enabled again
                $('.inp').keyup(function () {
                    $('.sub').prop('disabled', false);
                });

                //Show a confirmation box before deleting the post
                $('.delpost').on('click', function(){

                    return confirm('Are you sure you want to delete this post?');
                });

                //Show a confirmation box before updating the post
                $('.uppost').on('click', function(){

                   return confirm('Please confirm that you want to update this post');
                });
            });
        </script>
    </body>
</html>