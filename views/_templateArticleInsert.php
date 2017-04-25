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
                        <li><a href="../Controler/articleSelect.php">Blog</a></li>
                        <li><a href="../views/_templateContact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-4">
            <form class="bg-1" method="POST" action="../Controler/articleInsert.php">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-4">
                        <div class="form-group">
                            <label for="enterYourName">Title</label>
                            <input class="form-control" name="value[title]" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-offset-1 col-sm-12" for="enterText">Content</label>
                        <div class="col-sm-offset-1 col-sm-6">
                            <textarea class="form-control" rows="3" name="value[content]"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="col-sm-offset-1 btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- Footer -->
        <footer class="container-fluid bg-4 text-center">
            <p>Copyright LetMeDev4-U</p>
            <div class="row">
                <div class="col-md-offset-10 col-md-3">
                    <a href="../views/_templateArticleInsert.php">
                        Admin
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>