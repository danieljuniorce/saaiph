<?php
namespace Core;

class Source
{
  public static function getInstance()
  {
    static $inst = null;
    if ($inst === null) {
      $inst = new Source();
    }
    return $inst;
  }
  //Utilização da View
  public function view($viewAndPaste, $datas = array())
  {
    extract($datas);
    $configTemplate = explode('#', $viewAndPaste);

    if (count($configTemplate) > 1) {
      include './resources/views/'.$configTemplate[0].'/'.$configTemplate[1].'.php';
    } else {
      include './resources/views/'.$viewAndPaste.'.php';
    }
  }

  //Carregando template;
  public function template($viewAndPaste, $datas = array())
  {
    include './resources/views/layout/app.php';
  }

  //Carregamento do template e da View
  public function loadTemplateAndView($viewAndPaste, $datas = array())
  {
    extract($datas);
    $configTemplate = explode('#', $viewAndPaste);

    if (count($configTemplate) > 1) {
      include './resources/views/'.$configTemplate[0].'/'.$configTemplate[1].'.php';
    } else {
      include './resources/views/'.$viewAndPaste.'.php';
    }
  }

  public function asset($component)
  {
    echo 'resources/'.$component.'"';
  }
}
