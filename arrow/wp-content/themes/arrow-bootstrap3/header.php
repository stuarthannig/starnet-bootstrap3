<?php 
remove_filter ('the_content', 'wpautop');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?php wp_title( ' &laquo; ', true, 'right' ); ?></title>

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="container">
    <!-- Header & static navbar -->
    <header class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <h1 id="logo"><a href="/index.php" title="Arrow - Prefabricated Pumping Stations"><img src="/images/logo.jpg" width="354" height="99" alt="Arrow logo" /></a></h1>
        <div id="header-info" class="hidden-xs">
          <span class="manufactured-by">
            Manufactured by
            <a href="http://www.starnettech.com/"><img src="/images/starnet-logo.png" alt="Starnet Technologies, Inc." width="150" height="49" /></a>
          </span>
        </div><!-- /#header-info -->
      </div>
      <nav class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="hidden-xs"><a href="/index.php">Home</a></li>
          <li class="dropdown">
            <a href=".#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/products/module-l55/">Module L55</a></li>
              <li><a href="/products/module-l88/">Module L88</a></li>
              <li><a href="/products/module-g1020v/">Module G1020V</a></li>
              <li><a href="/products/module-mcx/">Module MCX</a></li>
              <li class="more"><a href="/products/">See all &rarr;</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href=".#" class="dropdown-toggle" data-toggle="dropdown">Representatives <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/representatives/#Illinois">Illinois</a></li>
              <li><a href="/representatives/#Indiana">Indiana</a></li>
              <li><a href="/representatives/#Iowa">Iowa</a></li>
              <li><a href="/representatives/#Michigan">Michigan</a></li>
              <li><a href="/representatives/#Minnesota">Minnesota</a></li>
              <li><a href="/representatives/#Nebraska">Nebraska</a></li>
              <li><a href="/representatives/#North Dakota">North Dakota</a></li>
              <li><a href="/representatives/#South Dakota">South Dakota</a></li>
              <li><a href="/representatives/#Wisconsin">Wisconsin</a></li>
              <li class="more"><a href="/representatives/">See all &rarr;</a></li>
            </ul>
          </li>
          <li><a href="/site-map/">Site Map</a></li>
        </ul>
        <span id="navbar-search">
          <script>
            (function() {
              var cx = '017165321553929725201:muqck8ddidw';
              var gcse = document.createElement('script'); gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                '//www.google.com/cse/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:search></gcse:search>
        </span><!--/#search -->
      </nav><!--/.nav-collapse -->
    </header>
    
    <!-- Main content -->
    <main class="row" role="main">
    