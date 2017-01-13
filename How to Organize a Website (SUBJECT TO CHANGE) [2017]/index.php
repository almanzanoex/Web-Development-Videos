<!DOCTYPE>
<html>
  <head>
    <?php
      //Database Connection
      include "db/connect.php";
      //Header
      include "includes/header.php";
    ?>
    <!--Index Styling-->
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
  </head>
  <body>
    <?php
      //Main Navbar
      include "includes/main-navbar.php";
      //Image Slider
      include "pages/index/image-slider.php";
      //Body Content
      include "pages/index/body-content.php";
      //Footer
      include "includes/footer.php";
    ?>
  </body>
  <!--Index JavaScript-->
  <script type="text/javascript" src="js/index.js"></script>
</html>
