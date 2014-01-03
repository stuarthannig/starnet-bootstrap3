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
        <h1 id="logo"><a href="/index.php" title="ArcSafe&#174; Pump Control Center (PCC)"><img src="/images/logo.png" width="228" height="100" alt="Arcsafe&#174; logo" /></a></h1>
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
          <li><a href="/product-information/">Product Information</a></li>
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
    