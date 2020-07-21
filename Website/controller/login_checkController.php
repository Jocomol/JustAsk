
<?php
class login_checkController
{

    public function index()
    {

        $view = new View('default_index');
        $view->title = 'Startseite';
        $view->heading = 'Startseite';
        $view->display();
    }
}
