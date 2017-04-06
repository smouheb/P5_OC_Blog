<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Template -->
        <title>LetMeDev4-U</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
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
                    <a class="navbar-brand" href="viewHome.php">Me</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../Controler/articleSelect.php">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- First Container -->
        <div class="container-fluid bg-1 text-center">
            <h3 class="margin">Who Am I?</h3>
            <img src="../img/MeSma.jpg" class="img-responsive img-circle margin" style="display:inline" alt="MyPicture" width="150" height="350">
            <h3>Web Developper</h3>
        </div>
        <!-- Second Container -->
        <div class="container-fluid bg-2 text-center">
            <h3 class="margin">You want to see my CV, here it is: </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <a href="#" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-search"></span> Search
            </a>
        </div>
        <!-- Third Container (Grid) -->
        <div class="container-fluid bg-3 text-center">
            <h3 class="margin">Where To Find Me?</h3><br>
            <div class="row">
                <div class="col-sm-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
                </div>
                <div class="col-sm-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
                </div>
                <div class="col-sm-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
                </div>
            </div>
            <!-- Footer -->
            <footer class="container-fluid bg-4 text-center">
                <p>Copyright LetMeDev4-U</p>
            </footer>
        </div>
    </body>
</html>


