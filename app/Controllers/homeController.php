<?php
namespace Controllers;
use Controllers\Controller;

class homeController extends Controller
{
  public function index()
  {
      if (verify_token($_POST['token'])) {
          echo 'Deu true';
      } else {
          echo 'Deu false';
      }
    Return $this->view('welcome');
  }

  public function teste()
  {
      echo 'Function teste';
  }
}
