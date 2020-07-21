<?php
require_once '../Repository/userrepository.php';

class RegisterController
{
  public function index()
  {
$view = new View('Register');
$view->title = 'Register';
$view->heading = 'Register';
$view->display();
}
public function register()
{

if (isset($_POST['create-account']))
	{

		$username = $_POST['username'];
		$Email = $_POST['email'];
		$password = $_POST['password'];
		$password_2 = $_POST['password2'];

		$userRepository = new UserRepository();
		$ID = $userRepository->create($username, $Email,$password);
		$view = new View('newquestion');
		$view->title = 'Startseite';
		$view->heading = 'Startseite';
		$view->display();
	}
}
}
