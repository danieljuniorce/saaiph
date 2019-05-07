<?php
namespace Controllers;
use \Star\Core\Source;
use \Models\User;
class homeController extends Source
{
  public function index()
  {
    $this->template('welcome');
  }
  public function teste()
  {
    Source::template('welcome');
  }
}
