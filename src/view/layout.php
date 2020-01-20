<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> - Humo: The Wild Site</title>
    <?php echo $css;?>
  </head>
  <body>
    <nav>
      <div class="nav__topnav">
        <div class="topnav__leftside">
          <ul>
            <li><a href="#" class="topnav__leftside-highlight">Video</a></li>
            <li><a href="#">TV-Gids</a></li>
            <li><a href="#">Zoekertjes</a></li>
            <li><a href="#">Abonnement Nemen</a></li>
          </ul>
        </div>
        <div class="topnav__rightside">
        <ul>
            <li><a href="#" class="topnav__rightside-highlight">Nu in Humo</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="/cart">WM</a></li>
          </ul>
        </div>
      </div>
      <div class="nav__mainnav">
        <ul class="mainnav__container">
          <li><a href="#">Home</a></li>
          <li><a href="#">Actua</a></li>
          <li><a href="#">Humor</a></li>
          <li><a href="#">TV/Film</a></li>
          <li><h1><a class="logo" href="/">HUMO</a></h1></li>
          <li class="mainnav__leftside-highlight"><a href="#">Muziek</a></li>
          <li><a href="#">Boeken</a></li>
          <li><a href="#" class="active">Webshop</a></li>
          <li><a href="/cart">Zoeken</a></li>
        </ul>
      </div>
      <div class="nav__subnav">
        <ul>
          <li><a href="#" class="active">Overzicht</a></li>
          <li><a href="#">Alles</a></li>
          <li><a href="#">Boeken</a></li>
          <li><a href="#">Gadgets</a></li>
        </ul>
      </div>
    </nav>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
      <main class="main">
        <div class="breadcrumbs">
         <?php
          foreach($breadcrumbs as $bc){
        ?>
        <a href="<?php echo $bc["url"]; ?>"><?php echo $bc["pageName"]; ?></a>
        <?php
          }
        ?>
        <a class="breadcrumbs__currentpage" href=""><?php echo $currentPage; ?></a>
        </div>
        <?php echo $content;?>
      </main>
    <?php echo $js; ?>
  </body>
</html>
