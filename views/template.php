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
                        <li><a href="../controller/ControlerModel.php">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-1 text-center">
            <h3 class="margin"><?= $title ?></h3><br>
            <table class="table table-hover">
                <div class="row">
                    <div id="content"><?= $content; ?></div>
                    <br>
                </div>
            </table>
        </div>
        <div class="container-fluid bg-4">
            <form class="bg-1" method="POST" action="../controller/ControlerModel.php?action=additem">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-4">
                        <div class="form-group">
                            <label for="enterYourName">Enter your name</label>
                            <input class="form-control" name="name" type="text">
                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="enterTitle">Title</label>
                            <input class="form-control" name="title" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-offset-1 col-sm-12"for="enterText">What do you wanna say?</label>
                    <div class="col-sm-offset-1 col-sm-6">
                    <textarea class="form-control" rows="3" name="content"></textarea>
                    </div>
                </div>
                <button type="submit" class="col-sm-offset-1 btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- Footer -->
        <footer class="container-fluid bg-4 text-center">
            <p>Copyright LetMeDev4-U</p>
        </footer>
    </body>
</html>