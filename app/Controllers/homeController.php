<?php
namespace Controllers;
use \Saaiph\Core\Source;
use \Models\User;
class homeController extends Source
{
  public function index()
  {
    $this->template('welcome');
  }
}
