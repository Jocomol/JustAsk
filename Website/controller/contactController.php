<?php
class contactController
{
  public function index()
  {
$view = new View('contact');
$view->title = 'Contact';
$view->heading = 'Contact';
$view->display();
}
}
