<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>識別結果取得ページ</title>
  </head>
  <body>
    <?php
      if($_GET[result]== "1"){
        $img = "notify.png";
      } else {
        $img = "blank.png";
      }

      $fp = fopen("result.txt","w");
      fwrite($fp,$img);
      fclose($fp)
      ?>
  </body>
</html>
