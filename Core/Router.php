<?php
namespace Core;

class Router {
  private $get;
  private $post;

  //Instancia de classe pelo padrão singleton da classe Router;
  public static function getInstance()
  {
    static $inst = null;
    if ($inst === null) {
      $inst = new Router();
    }
    return $inst;
  }
  //Carregando as funções de manipulação de rotas;
  public function loadRouter()
  {
    $this->loadFileConfigRouter('web');
    $this->loadUrl();
    return $this;
  }
  //Carregamento do arquivo de rotas;
  public function loadFileConfigRouter($file)
  {
    if (\file_exists('Router/'.$file.'.php')) {
      require ('Router/'.$file.'.php');
    }
  }

  public function loadUrl()
  {
    $prefix = '\Controllers\\';

    //GET url enviado e configurado pelo arquivo .htaccess;
    $url = (isset($_GET['url']) ? $_GET['url'] : '');

    //Verificação de qual method foi enviado GET ou POST
    switch ($_SERVER['REQUEST_METHOD']) {
      case 'GET':
        default:
        $type = $this->get;
        break;
      case 'POST':
        $type = $this->post;
        break;
    }
    //Navegando entre as urls pre escritas no arquivo /Router/web.php
    foreach ($type as $pt => $func) {
      $pattern = preg_replace('(\{[a-z0-9]{0,}\})', '([a-z0-9]{0,})', $pt);

      //Verificação de url
      if (preg_match('#^('.$pattern.')*$#i', $url, $matches) === 1) {
        array_shift($matches);
        array_shift($matches);

        //Armazenando o paramentros enviado entre {} no arquivo Router/web.php
        $itens = array();
        if (preg_match_all('(\{[a-z0-9]{0,}\})', $pt, $m)) {
          $itens = \preg_replace('(\{|\})', '', $m[0]);
        }
        $arg = array();
        foreach ($matches as $key => $match) {
          $arg[$itens[$key]] = $match;
        }
        //Carregando classe controller e action
        if (\is_string($func)) {
          //repassando os paramantros enviandas pela url;
          if (!empty($arg)) {
            $params = $arg;
          } else {
            $params = array();
          }
          //Transformando o indices enviado pela funções get ou post pelo arquivo /Router/web.php
          $controllerAndAction = explode('@', $func);
          //Armazenando e colocando o namespace no controller;
          $controller = $prefix.$controllerAndAction[0];
          //Armazenando a action;
          $action = $controllerAndAction[1];

          //Instanciando a classe e action e paramentros das Classes Controllers
          call_user_func_array(array($controller, $action), $params);
        } else {
          //Função simples de manipulação via Router/web.php;
          $func($arg);
        }
        //encerrando o foreach;
        break;
      }
    }
  }
  //Armazenando em array os link enviados por GET;
  public function get($padrao, $funcao)
  {
    $this->get[$padrao] = $funcao;
  }
  //Armazenando em array os link enviados por POST;
  public function post($padrao, $funcao)
  {
    $this->post[$padrao] = $funcao;
  }
}
