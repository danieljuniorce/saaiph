<?php
namespace Controllers;
use \Core\Source;
use \Models\User;
class homeController extends Source
{
  public function index()
  {
    Source::template('welcome');
  }
}
