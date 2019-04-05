<?php
$this->get('teste', 'homeController@index');
$this->get('teste/{id}', 'homeController@teste');
$this->get('function/{nome}', function ($arg) {
  echo 'Meu nome é '.$arg['nome'];
});
?>
