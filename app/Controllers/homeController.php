<?php
namespace Controllers;
use Controllers\Controller;

class homeController extends Controller
{
  public function index()
  {
    Return $this->view('welcome');
  }
}
