<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"
    />
    <link rel="stylesheet" href="css/pages.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  </head>
  <body>
    <div data-role="page" id="page_4">
      <div header>
        <?php include "header.php";?>
      </div>
      <!-- /header -->
      <div data-role="navbar" data-grid="c">
        <ul>
          <li>
            <a href="p1.html" data-transition="slide" class="ui-btn-active"
              >One</a
            >
          </li>
          <li><a href="p2.html" data-transition="slide">Two</a></li>
          <li><a href="p3.html" data-transition="slide">Three</a></li>
          <li><a href="p4.php" data-transition="slide">Four</a></li>
        </ul>
      </div>
      <!-- /navbar -->

      <div dara-role="main" class="ui-content">
        
        <img src="img/bureau-7-mob.jpg" alt="bureau">

        <p>Page content goes here.</p>
        <p>Page content goes here.</p>
        <span class="center">Page 4</span>
      </div>

      <div data-role="footer" footer>
        <?php include "footer.php";?>
      </div>
      <!-- /footer -->
    </div>
    <!-- /page -->
  </body>
</html>
