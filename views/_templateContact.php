<?php require "header.php"?>
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
                    <div class="text-left col-md-10 col-xs-11">
                        <a href="mailto:smael.mouheb@gmail.com">
                            smael.mouheb@gmail.com
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-1">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="text-left col-md-10 col-xs-11">
                        <p>+352.661.661.196</p>
                    </div>
                </div>
            </div>
            <br/>
        </div>
        <!-- Footer -->
        <?php require "footer.php"?>
    </body>
</html>
