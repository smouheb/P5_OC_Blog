<?php
class Routeur
{
    private $path_info;
    private $args;
    private $controller_class;
    private $idrequest;
    private $methodupdate;
    private $methodinsert;
    private $methodcontact;
    private $methodselect;
    private $methodadmin;
    private $methoddetails;
    private $methoddelete;
    private $home;
    private $success;
    private $pagecontact;

    /*
     * This constructor is parsing the url passed by the index and put these data in an array
     * Where first the method/controller name is populated and second the id when it requires an interaction with the db
     */
    public function __construct($path_info){

        $this->path_info = $path_info;

        $this->args = array_filter(explode('/',$this->path_info));

        $this->controller_class = $this->args[1];

        $this->idrequest = $this->args[2];
    }

    /*
     * This method is calling the related controllers with or without arguments passed
     */
    public function routing(appController $classcontroller, $value = null)
    {

        $param1 = $this->controller_class;


        $param2 = $this->idrequest;

        if (isset($this->path_info)) {

            if (!is_null($value) && isset($param2)) {

                return $this->methodupdate = $classcontroller->articleUpdate($value, $this->idrequest);

            } elseif (!is_null($value) && !isset($param2)) {

                switch ($param1) {

                    case $param1 === 'articleInsert':
                        return $this->methodinsert = $classcontroller->articleInsert($value);
                        break;

                    case $param1 === 'contacts':
                        return $this->methodcontact = $classcontroller->contacts($value);
                        break;
                }

            } elseif (is_null($value) && isset($param2)) {

                switch ($param1) {

                    case $param1 === 'articleDetails':
                        return $this->methoddetails = $classcontroller->articleDetails($param2);
                        break;

                    case $param1 === 'articleDelete':
                        return $this->methoddelete = $classcontroller->articleDelete($param2);
                        break;
                }

            } elseif (is_null($value) && !isset($param2)) {

                switch ($param1) {

                    case $param1 === 'articleSelect':
                        return $this->methodselect = $classcontroller->articleSelect();
                        break;

                    case $param1 === 'articleAdmin':
                        return $this->methodadmin = $classcontroller->articleAdmin();
                        break;

                    case $param1 === 'messagesuccess':
                        return $this->success = $classcontroller->success();
                    break;

                    case $param1 === 'Contact':
                        return $this->pagecontact = $classcontroller->vcontact();
                    break;

                    case $param1 === 'home':
                        return $this->home = $classcontroller->home();
                    break;
                }
            }
        } else {

            return $classcontroller->home();
        }
    }

}