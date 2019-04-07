<?php
namespace Controllers;
use \Core\Source;
use \Models\User;
class homeController extends Source
{
  public function index()
  {
    echo User::where('email', 'danieljuniorce')->get();
    Source::template('teste');
  }
  public function teste($id)
  {
    Source::view('teste');
  }
}
