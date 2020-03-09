<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name="Janusz";
      $nazwisko="Kowal";
      echo $name." ".$nazwisko;

      //heredoc
      $text=<<<SHOW
        <hr>
        Imię: $name<br>
        Nazwisko: $nazwisko<br>
        dupaaaaaaaaaa
        <hr>
SHOW;

      //nowdoc
      $namee="jancyk";
      echo <<<'X' //bez '' zrobi normanlnie lol
      imie: $namee
X;
      echo $text;
     ?>
  </body>
</html>
