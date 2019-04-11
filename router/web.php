<?php
/*
  Router em POST e GET com as funções $this->get() ou $this->post();

  $this->get('url/{params}', 'nameController@action');
  $this->get('url/{params}', function() {});
  
*/
$this->get('', 'homeController@index');
?>
