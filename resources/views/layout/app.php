<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Solution</title>
    <link rel="stylesheet" href="<?=$this->asset('css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?=$this->asset('css/style.css');?>">
    <link rel="icon" href="<?=$this->asset('img/favicon.png');?>">
  </head>
  <body>
    <?php
      //Don´t remove
      $this->loadTemplateAndView($viewAndPaste, $datas);
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?=$this->asset('js/bootstrap.js');?>"></script>
    <script type="text/javascript" src="<?=$this->asset('js/script.js');?>"></script>
  </body>
</html>
