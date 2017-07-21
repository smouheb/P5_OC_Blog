<?php
class appController extends viewsManager {

    private $defaultpage;
    /*
     * There is here one method per controller
     */
    public function home(){

        // to be changed as well
        $this->defaultpage = include'views/home.php';

        return $this->defaultpage;
    }

    public function articleSelect(){

        $manager = new ArticleManager();

        $m = $manager->selectAllPost();

        include 'views/viewBlog.php';

        //only the template in showing but the data are not??
        //$this->viewBlog();

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
        header('location:../../302.php');

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
        header('location:../../302.php');
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

}