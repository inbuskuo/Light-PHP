<?php

class indexController{

    public function index(){

        /* Here show the welcome page! */
        $data['title'] = "Welcome to my new page!";
        $data['body'] = "Im very excited about my new PHP framework";

        /* View */
        $route_view = DIR_VIEW."pags/info/welcomeView.php";

        /* Load */
        viewClass::load($route_view,$data);

    }


}