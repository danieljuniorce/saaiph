<?php
namespace Core;

class Source
{
  //Utilização da View
  public function view($viewAndPaste, $datas = array())
  {
    extract($datas);
    $configTemplate = explode('#', $viewAndPaste);

    if (count($configTemplate) > 1) {
      include './Resources/views/'.$configTemplate[0].'/'.$configTemplate[1].'.php';
    } else {
      include './Resources/views/'.$viewAndPaste.'.php';
    }
  }

  //Carregando template;
  public function template($viewAndPaste, $datas = array())
  {
    include './Resources/views/layout/app.php';
  }

  //Carregamento do template e da View
  public function loadTemplateAndView($viewAndPaste, $datas = array())
  {
    extract($datas);
    $configTemplate = explode('#', $viewAndPaste);

    if (count($configTemplate) > 1) {
      include './Resources/views/'.$configTemplate[0].'/'.$configTemplate[1].'.php';
    } else {
      include './Resources/views/'.$viewAndPaste.'.php';
    }
  }

  public function asset($component)
  {
    echo $_ENV['HOST'].'Resources/'.$component.'"/>';
  }
}
