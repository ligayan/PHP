<?php echo "danek"; ?><br>
<?php echo "string"; ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>danek</title>
  </head>
  <body>
<table>
  <tr>
    <td>danek</td>
  </tr>
  <tr>
    <td>danek 2</td>
    <td>danek 2</td>
  </tr>
</table>
<form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="text" name="dan" value="">
  <input type="submit" name="danek" value="Wyslij dane">
  <?php if (isset $_POST[danek])) {
    echo $_POST[dan];
  } ?>
</form>
  </body>
</html>
