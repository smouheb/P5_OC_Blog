<?php $id = $_GET['id'];?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Template -->
        <title>LetMeDev4-U</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../views/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../vendor/tinymce/tinymce/tinymce.js"></script>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../views/viewHome.php">Me</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../Controler/articleSelect.php">Blog</a></li>
                        <li><a href="../views/_templateContact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-1 text-center">
            <h3 class="margin"><?= $title ?></h3>
            <br>
            <div class="row">
                <p><?= $content; ?></p>
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
        <div class="container-fluid bg-4">
                <form class="bg-1" method="POST" action="<?="../Controler/commentInsert.php?id=".urlencode($id)?>">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-4">
                            <div class="form-group">
                                <label for="enterYourName">Enter your name</label>
                                <input class="form-control" name="value[name]" type="text">
                            </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-sm-offset-1 col-sm-12" for="enterText">What do you wanna say?</label>
                        <div class="col-sm-offset-1 col-sm-6">
                            <textarea class="form-control newcomment" rows="3" name="value[comment]"></textarea>
                        </div>
                    </div>
                        <button type="submit" class="col-sm-offset-1 btn btn-primary">Submit</button>
                </form>
            </div>
        <!-- Footer -->
        <div class="container-fluid bg-4 text-center">
            <footer>
                <p>Copyright LetMeDev4-U</p>
                <div class="row">
                    <div class="col-md-offset-10 col-md-3">
                        <a href="../Controler/articleAdmin.php">
                            Admin
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <script>
        $(function () {

            //function to display the text area and the button update related to the "edit" button clicked
            $(".editField").on('click',function () {
                    tinymce.init({
                        selector: "textarea.hiddenField",
                        plugins: "contextmenu"
                    });
                $(this).closest('div.row').find('.hiddenField').toggle();
            });

            //add TinyMCE for new comments
            $(".newcomment").on('click', function () {
                $(this).show(function (){
                        tinymce.init({
                        selector: "textarea",
                        plugins: "contextmenu"
                    });
                });
            });
        });
    </script>
</html>