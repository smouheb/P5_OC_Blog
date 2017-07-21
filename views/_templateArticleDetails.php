<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Template -->
        <title>LetMeDev4-U</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../views/style.css">
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
                    <a class="navbar-brand" href="<?= ROUTER."home"?>">Me</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?= ROUTER."articleSelect"?>">Blog</a></li>
                        <li><a href="<?="../views/_templateContact.php"?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-2 text-center" style= "height: 100px;">
            <h1 class="margin" style="margin-top: 0;"><?= $title = 'Here it is...' ?></h1><br>
        </div>
        <div class="container-fluid bg-1 text-center">
            <div id="content"><?= $content; ?></div>
            <br>
        </div>
            <!-- Footer -->
        <div class="container-fluid bg-4 text-center">
            <footer>
                <p>Copyright LetMeDev4-U</p>
                <div class="row">
                    <div class="col-md-offset-10 col-md-3">
                        <a href="<?= ROUTER."articleAdmin"?>">
                            Admin
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
