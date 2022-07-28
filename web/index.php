<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/web/css/main.css">
  <link rel="stylesheet" href="/web/css/layout.css">
  <title>University of Alderaan</title>
</head>
<body>
  <h1>Welcome to the University of Alderaan</h1>
  <img src="/web/img/rua-logo.png" alt="University of Alderaan Logo">
  <p>This site is currently under a lot of construction</p>
  <?php 
    $d=mktime(0, 0, 0, 7, 28, 2022);
    echo "Last Updated on " . date("m-d-Y", $d);
  ?>
  <footer>
    &copy; aVanos - <?php echo date("M Y");?>
  </footer>
</body>
</html>