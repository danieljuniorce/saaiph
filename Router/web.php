<?php
$this->get('teste', function (){
  echo 'Daniel';
});
$this->get('teste/{id}', function ($ags){
  echo 'Daniel';
});
?>
