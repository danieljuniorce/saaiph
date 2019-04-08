<?php
namespace Controllers;
use \Core\Source;
use \Models\User;
class homeController extends Source
{
  public function index()
  {
    $this->template('welcome');
  }
  public function teste()
  {
    $this->template('welcome');
  }
}
