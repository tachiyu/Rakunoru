<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="5">
    <title>蒲田駅</title>
  </head>
  <body>
    <?php
        $fs = fopen("result.txt","r");
        $img = fgets($fs);
        ?>
    <img id = "pic" src = "<?php echo $img?>" width = "400" height="300">
  </body>
</html>
