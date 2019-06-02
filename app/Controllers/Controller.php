<?php
namespace Controllers;

use duncan3dc\Laravel\BladeInstance;

class Controller
{
    private $view = __DIR__.'/../../resources/views/';
    private $cache = __DIR__.'/../../storage/cache/app/views/';

    //Function para exibição do template Blade Engine, instânciado pela classe Controller.
    public function view($view, $data = [])
    {
        extract($data);

        $blade = new BladeInstance($this->view, $this->cache);
        echo $blade->render($view, $data);
    }
}
