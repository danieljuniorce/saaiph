<?php
namespace Controllers;
use \Core\Source;
class homeController extends Source
{
  public function index()
  {
    Source::template('teste');
  }
  public function teste($id)
  {
    Source::view('teste');
  }
}
