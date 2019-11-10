<html>
<head>
<title>Sophie Zinda</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body>

<div id="ttr_header" class="jumbotron">
  <nav id="site-navigation" class="main-navigation">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'top-nav',
      'menu_id'        => 'nav-menu',
    ) );
    ?>
  </nav><!-- #site-navigation -->
</div>
<div class="container-fluid">
