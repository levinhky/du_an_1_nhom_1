<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Global CSS -->
    <link rel="stylesheet" href="../public/css/base/reset.css">
    <link rel="stylesheet" href="../public/css/base/theme.css">
    <link rel="stylesheet" href="../public/css/base/font.css">
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/aeb1173b82.js" crossorigin="anonymous"></script>
    <!-- Layout CSS -->
    <link rel="stylesheet" href="../public/css/client/layout/header.css">
    <link rel="stylesheet" href="../public/css/client/layout/bread_crumb.css">
    <link rel="stylesheet" href="../public/css/client/layout/footer.css">
    <?php
    if ($link_css_arr != '') {
      echo '<!-- Link CSS -->';
      foreach ($link_css_arr as $link_css) {
        echo '<link rel="stylesheet" href="'.$link_css.'">';
      }
    }
  ?>
</head>

<body>
    <?php 
    include_once 'header.php';
    include_once 'bread_crumb.php';
    include_once $view_link;
    include_once 'footer.php'; 
  ?>
    <?php
    if ($link_js_arr != '') {
      echo '<!-- link JS -->';
      foreach ($link_js_arr as $link_js) {
        echo '<script src="'.$link_js.'"></script>';
      }
    }
  ?>
</body>

</html>