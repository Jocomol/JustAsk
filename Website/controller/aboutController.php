<?php
class aboutController
{
  public function index()
  {
$view = new View('about');
$view->title = 'About';
$view->heading = 'About';
$view->display();
}
}
