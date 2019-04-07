<?php
$this->get('', 'homeController@index');
$this->get('url-amigavel-dms', 'homeController@teste');
$this->get('function/{nome}', function ($arg) {
  echo 'Meu nome é '.$arg['nome'];
});
?>
