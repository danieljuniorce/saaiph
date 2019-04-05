<?php
namespace Controllers;

use \Core\Controller;
class homeController extends Controller
{
  public function index()
  {
    echo "isso quase deu certo";
  }
  public function teste($id)
  {
    echo 'action teste, enviando id <strong>'.$id.'<strong>';
  }
}
