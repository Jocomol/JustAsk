<?php
require_once '../Repository/newquestionrepository.php';

class newquestionController
{
  public function create()
  {
    $view = new View('newquestion');
    $view->title = 'Newquestion';
    $view->heading = 'Newquestion';
    $view->display();
  }

public function donewquestion(){
  if (isset($_POST['postbutton']))
    {
      $Titel = $_POST['settitle'];
      $Inhalt = $_POST['questiontext'];

      $newquestionRepository = new newquestionRepository();
      $ID = $newquestionRepository->create($Inhalt, $Titel);
      $view = new View('newquestion');
      $view->title = 'Newquestion';
      $view->heading = 'Newquestion';
      $view->display();
    }
}

  public function newquestion()
  {

      $view = new View('newquestion');
      $view->title = 'Newquestion';
      $view->heading = 'Newquestion';
      $view->display();

  }

  public function index(){
    $newquestionRepository = new newquestionRepository();
    $view = new View('question_index');
    $view->title = 'Allquestions';
    $view->heading = 'Allquestions';
    $view->questions = $newquestionRepository->readAll();
    $view->display();
  }

  /*public function voteup(){
    $newquestionRepository = new NewquestionRepository();
    $view = new View('question_index');
    $view->title = 'Allquestions';
    $view->heading = 'Allquestions';
    $view->questions = $newquestionRepository->readAll();
    $curr = $question->Upvotes + 1;
    $query = "UPDATE frage SET Upvotes = $curr WHERE UPVOTES = $curr -1";

    $view->display();
  }*/

  public function votedown(){

  }

}
