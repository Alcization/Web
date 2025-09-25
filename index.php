<?php
$title = "Home Page";
$content = "<p>This is the Home endpoint.</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <style>
    body { font-family: Arial, sans-serif; margin: 40px; }
    header { background: #f4f4f4; padding: 10px; border-radius: 6px; margin-bottom: 20px; }
    h1 { color: #333; }
    footer { margin-top: 20px; font-size: 0.9em; color: gray; }
  </style>
</head>
<body>
  <header>
    <h1><?php echo $title; ?></h1>
    <p>Endpoint: <?php echo $_SERVER['PHP_SELF']; ?></p>
  </header>

  <main>
    <?php echo $content; ?>
  </main>

</body>
</html>