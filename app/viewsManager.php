<?php
class viewsManager
{
    private $viewname;
    private $path;

    public function viewBlog(){

        $filename = 'viewBlog';

        return $this->fileToInclude($filename);
    }

    protected function viewArticleDetails(){

    }

    protected function viewArticleDelOrUpdate(){

    }

    protected function viewArticleInsert(){


    }

    protected function fileToInclude($viewname){

        $this->viewname = $viewname;

        $pathtoreturn = include 'views/'.$viewname.'.php';

        return $pathtoreturn;

    }

    protected function pathView(){

        $this->path = 'views/';

        return $this->path;
    }
}