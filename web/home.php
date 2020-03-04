<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php require_once 'libraries-css.php' ?>
</head>

<body>
  <div class="row" style="margin: 0; height: 100vh; width: 100%">
    <div class="m-background1" style="padding: 0;width: 300px">
      <?php require_once 'menu.php' ?>
    </div>
    <div class="" style="padding: 0;width: calc(100% - 300px)">
      <?php require_once 'header.php' ?>
      <div style="padding: 0 15px">
        <h2>derecha</h2>
      </div>
      <?php require_once 'footer.php' ?>
    </div>
  </div>
  <?php require_once 'libraries-js.php' ?>
</body>

</html>