<?php
namespace Core;

class Router {
  private $get;
  private $post;
  public static function getInstance()
  {
    static $inst = null;
    if ($inst === null) {
      $inst = new Router();
    }
    return $inst;
  }
  public function loadRouter()
  {
    $this->loadFileConfigRouter('web');
    $this->loadUrl();
    return $this;
  }
  public function loadFileConfigRouter($file)
  {
    if (\file_exists('Router/'.$file.'.php')) {
      require ('Router/'.$file.'.php');
    }
  }

  public function loadUrl()
  {
    $url = (isset($_GET['url']) ? $_GET['url'] : '');

    switch ($_SERVER['REQUEST_METHOD']) {
      case 'GET':
        default:
        $type = $this->get;
        break;
      case 'POST':
        $type = $this->post;
        break;
    }
    foreach ($type as $pt => $func) {
      $pattern = preg_replace('(\{[a-z0-9]{0,}\})', '([a-z0-9]{0,})', $pt);


      if (preg_match('#^('.$pattern.')*$#i', $url, $matches) === 1) {
        array_shift($matches);
        array_shift($matches);
        $itens = array();
        if (preg_match_all('(\{[a-z0-9]{0,}\})', $pt, $m)) {
          $itens = \preg_replace('(\{|\})', '', $m[0]);

        }
        $arg = array();
        foreach ($matches as $key => $match) {
          $arg[$itens[$key]] = $match;
        }
        $func($arg);
        break;
      }
    }
  }

  public function get($padrao, $funcao)
  {
      $this->get[$padrao] = $funcao;
  }
  public function post()
  {
      $this->post[$padrao] = $funcao;
  }

}
