<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Clifford</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>

  <?php if( $_GET['page']=='home' || empty($_GET) ): ?>
    <div id="cover-wrapper" class="cover-wrapper container-fluid ">
      <?php include('components/cover.php'); ?>
    </div>      
  <?php else: ?>
    <div id="navbar" class="navbar">
      <a href="index.php"> < home</a>
    </div>
    <div id="header-wrapper">
      <header>
        <h1>header</h1>
      </header>  
    </div>
  <?php endif; ?>

  <?php if( $_GET['page']=='home' || empty($_GET) ): ?>
    <div id="inner-wrapper" class="inner-wrapper">
  <?php endif; ?>

      <div id="page-wrapper" class="page-wrapper container-fluid">
        <?php 
          //logic to load the correct page contents.
          //URI will look like domain/index.php?page=something
          switch( $_GET['page'] ){

            case 'home':
            include('pages/home.php');
            break;

            case 'about':
            include('pages/about.php');
            break;

            default:
            include('pages/home.php');
          }//end switch
        ?>
      </div>

      <div id="footer-wrapper" class="footer-wrapper container-fluid">
        <?php include('components/footer.php'); ?>
      </div>

  <?php if( $_GET['page']=='home' || empty($_GET) ): ?>
    </div><!-- /inner-wrapper -->
  <?php endif; ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>
</html>