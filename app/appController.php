<?php
class appController {

    private $defaultpage;
    private $successpage;
    private $viewcontact;
    /*
     * There is here one method per controller
     */
    public function home(){

        // to be changed as well
        $this->defaultpage = include'views/home.php';

        return;
    }

    public function success(){

        return $this->successpage = include '../messagesuccess.html';


    }

    public function vcontact(){

        return $this->viewcontact = include 'views/Contact.php';


    }

    public function articleSelect(){

        $manager = new ArticleManager();

        $m = $manager->selectAllPost();

        include 'views/viewBlog.php';

        return $m;
    }

    public function articleDetails($idrequest){
        /*
         * instantiate the ArticleManager class to get the article selected by the user when pressing "More" in the list of article's screen
         * @param int Id of the relate article
         */
        $manager = new ArticleManager();
        $details = $manager->selectPost($idrequest);
        include 'views/viewDetailpost.php';
    }

    public function articleUpdate($value, $idrequest)
    {
        /*
         * Re hydrate the data received from the article that has been updated
         * Set  the data (through the Article constructor and clean the data)
         * Get the data and I'm storing them in variables to instantiate and call the related manager (db)
         */
        $narticle = new Articles($value, 1);

        $title = $narticle->getTitle();
        $content = $narticle->getContent();
        $chapo = $narticle->getChapo();

        /*
         * edition/update the data in db
         */
        $articles = new ArticleManager();
        $articles->edit($title, $content, $idrequest, $chapo);

        /*
         * Redirection to another page that will also redirect but will mostly clean the url and
         * call the articleAdmin method to show the updates
         */
        header('location:../../redirectadmin.php');

    }

    public function articleDelete($idrequest)
    {
        /*
         * deletion of an article
         */
        $articles = new ArticleManager();
        $articles->delArticle($idrequest);

        /*
         * Redirection to another page that will also redirect but will mostly clean the url and
         * call the articleAdmin method to show the updates
         */
        header('location:../../redirectadmin.php');
    }
    public function articleInsert($value){

        $narticle = new Articles($value, 1);
        $title = $narticle->getTitle();
        $content = $narticle->getContent();
        $chapo = $narticle->getChapo();
        $name = $narticle->getName();
        $newarticle = new ArticleManager();
        $newarticle->insertArticle($name, $title, $content, $chapo);


        $this->articleAdmin();
    }

    public function articleAdmin(){

        $admin = new ArticleManager();
        $r = $admin->selectAllPost();
        include 'views/viewAdmin.php';
    }

    public function contacts($value){

        $contacts = new Contacts($value, 1);
        $name = $contacts->getName();
        $email = $contacts->getEmail();
        $subject = $contacts->getSubject();
        $message = $contacts->getMessage();

        //Instantiate the class that will send the email

        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, "ssl"))
            ->setUsername('youremail@gmail.com')
            ->setPassword('yourpassword');

        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message($subject))
            ->setFrom([$email => $name])
            ->setTo(['email@gmail.com' => 'Admin'])
            ->setBody($message);

        $result = $mailer->send($message);

        //Redirect when the message is sent or send to a temporary page saying it is successful before being redirected
        header('location:../messagesuccess');
    }


}