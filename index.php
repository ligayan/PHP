

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="STYLE.CSS">
    <title>danek</title>
  </head>
  <body>

<form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="text" name="dan" value="">
  <input type="submit" name="danek" value="Wyslij dane"><br>

  <?php if (isset ($_POST['danek'])) {
    echo $_POST['dan'];
  } ?>
</form>
  </body>
</html>
