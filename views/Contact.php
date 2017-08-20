<?php require "header.php"?>
        <div class="col-offcontainer-fluid bg-1 text-center">
            <div class="row">
                <div class="col-md-offset-1 col-md-5">
                    <h3 class="margin">Contact Me </h3>
                    <form class="text-left" method="post" action="<?="../index.php/contacts"?>">
                        <div class="form-group">
                            <label name="value[name]">Your Name or Pseudo</label>
                            <input type="text" class="form-control inp" placeholder="Name" minlength="5" maxlength="50"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="value[email]" class="form-control inp" id="exampleInputEmail1" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exqmpleSubject">Subject</label>
                            <input type="text" name="value[subject]" class="form-control inp" id="exampleInputEmail1" minlength="5" maxlength="50" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="yourText">Enter your text</label>
                            <textarea rows="4" name="value[message]" type="text" class="form-control col-lg-12 inp" placeholder="Enter your text here" minlength="10" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary sub">Submit</button>
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
<script>
    $(function () {
        //disable submit button when page is loaded
        $('.sub').prop('disabled',true);

        //Check whether the text area is in line with what is required to enable the submission
        $('.inp').keyup(function () {

            if($('.inp').val() != '' && $('textarea').val().length >=10){

                    $('.sub').prop('disabled', false);
                }
            })
        });
        //When the user press a button on the keybord the submit button is enabled again
</script>
</html>
