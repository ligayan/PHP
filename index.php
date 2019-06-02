<!DOCTYPE html>
<html lang="pl" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="STYLE.CSS">
  <title>danek</title>
</head>

<body>
  <?php include 'db_connect.php' ?>
  <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="dan" value="">
    <input type="submit" name="danek" value="Wyslij dane"><br>
    <select name="Przeglądarka"><br>
      <option selected>jakie działanie</option>
      <option>*</option>
      <option>/</option>
      <option>+</option>
      <option>-</option>
      PHP

      <input type="text" name="dan2" value=""></br>
    </select>

    <?php if (isset($_POST['danek'])) {
      switch ($_POST['Przeglądarka']) {
        case "*":
          echo ($_POST['dan'] * $_POST['dan2']);
          break;
        case "/":
          if ($_POST['dan2'] == 0) {
            echo "nie można dzielić przez 0";
          } else {
            echo ($_POST['dan'] / $_POST['dan2']);
          };
          break;
        case "+":
          echo ($_POST['dan'] + $_POST['dan2']);
          break;
        case "-":
          echo ($_POST['dan'] - $_POST['dan2']);
          break;
        default:
        echo "nie wybrałeś działania";
      }
    } ?>
  </form>
</body>

</html>