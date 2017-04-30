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
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
                        <li><a href="../views/_templateContact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- First Container -->
        <div class="container-fluid bg-1 text-center">
            <h3 class="margin">Who Am I?</h3>
            <img src="../img/MeSma.jpg" class="img-responsive img-circle margin" style="display:inline" alt="MyPicture" width="150" height="350">
            <h3>Web Developper</h3>
            <p>I have been working in IT in different fields, from test engineer to project manager... but what I really love is writing codes... building stuff and enjoying the result.
            Can be furstrating at times, but for every project I'm working on, I always enjoy the journey</p>
        </div>
        <!-- Second Container -->
        <div class="container-fluid bg-2 text-center">
            <h3 class="margin">You want to see my CV, here it is: </h3>
        </div>
        <!-- Third Container (Grid) -->
        <div class="container-fluid bg-3 text-center">
            <h5 class="margin row">Where To Find Me?</h5><br>
            <div class="row">
                <div class="col-lg-offset-4">
                    <div class="col-sm-2">
                        <a href="https://twitter.com/ismamouheb"  alt="LinkTwitter"><i class="fa fa-twitter fa-4x follow"></i></a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://github.com/smouheb"  alt="LinkGithub"><i class="fa fa-github fa-4x"></i></a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://www.linkedin.com/in/smael-mouheb-624b1124/"  alt="Linkedin"><i class="fa fa-linkedin fa-4x follow"></i></a>
                    </div>
                    <div class="col-sm-2">
                        <table>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-offcontainer-fluid bg-1 text-center">
            <div class="row">
                <div class="col-md-offset-1 col-md-5">
                    <h3 class="margin">Contact Me </h3>
                    <form class="text-left" method="post" action="">
                        <div class="form-group">
                            <label name="name">Your Name or Pseudo</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exqmpleSubject">Subject</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="yourText">Enter your text</label>
                            <textarea rows="4" class="form-control col-lg-12" placeholder="Enter your text here"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <h3 class="margin">My Contact Details</h3>
                    <div class="col-xs-1">
                        <a href="mailto:smael.mouheb@gmail.com">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>
                    <div class="text-left col-xs-11">
                        <a href="mailto:smael.mouheb@gmail.com">
                            smael.mouheb@gmail.com
                        </a>
                    </div>
                    <div class="col-xs-1">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="text-left col-xs-11">
                        <p>+352.661.661.196</p>
                    </div>
                </div>
            </div>
            <br/>
        </div>
            <!-- Footer -->
        <div class="container-fluid bg-4 text-center">
            <footer>
                <p>Copyright LetMeDev4-U</p>
                <div class="row">
                    <div class="col-md-offset-10 col-md-3">
                        <a href="_templateArticleInsert.php">
                            Admin
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>


