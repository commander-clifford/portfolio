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

  <?php
    /*
     * logic to load page contents.
     * URI will look like domain/index.php?page=something
     *
    */
    switch( $_GET['page'] ){

      case 'home':
        include('pages/home.php');
      break;

		case 'work':
			include('pages/work.php');
		break;

		case 'about':
			include('pages/about.php');
		break;

      default:
        include('pages/home.php');

    }//end switch
  ?>

  <div id="contact-wrapper" class="contact-wrapper container-fluid">
    <?php include('components/contact.php'); ?>
  </div>

  <div id="footer-wrapper" class="footer-wrapper container-fluid">
    <?php include('components/footer.php'); ?>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>

<?php
	switch( $_GET['page'] ){

		case 'work':
		?>

		<!-- <script type="text/javascript" src="js/masonry.min.js"></script>
		<script type="text/javascript">
		$('.grid').masonry({
			// set itemSelector so .grid-sizer is not used in layout
			itemSelector: '.grid-item',
			// use element for option
			columnWidth: '.grid-sizer',
			percentPosition: true
		});
		</script> -->

		<?php
		break;
	}
?>


</body>
</html>
