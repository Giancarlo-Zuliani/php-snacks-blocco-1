<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>jsnack 1</title>
    <?php
    $name  = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    $haveDot = strpos($mail , '@');
    $haveAt = strpos($mail,'.');
    $isNum = is_numeric($age);
    ?>
  </head>
  <body>
    <h1><?php if($haveDot && $haveAt && strlen($name) > 3 && $isNum){
      echo 'ACCESSO RIUSCITO';
    } else {
      echo 'ACCESSO NEGATO';
    };
    ?></h1>
  </body>
</html>
