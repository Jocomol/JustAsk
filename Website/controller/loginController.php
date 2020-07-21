<?php
class loginController
{
  public function index()
  {
$view = new View(' login');
$view->title = ' Login';
$view->heading = ' Login';
$view->display();
}
}
