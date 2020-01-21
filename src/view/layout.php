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
      <footer class="footer">
        <div class="footer__container">
          <section class="footer__column-container">
            <article class="footer__column">
              <h5>Actua</h5>
              <ul>
                <li><a href="#">Nu in Humo</a></li>
                <li><a href="#">De columns</a></li>
                <li><a href="#">Dossiers</a></li>
                <li><a href="#">Politiek</a></li>
                <li><a href="#">Sport</a></li>
                <li><a href="#">Onze man/vrouw</a></li>
                <li><a href="#">Eerder in Humo</a></li>
                <li><a href="#">De eindejaarsvragen</a></li>
                <li><a href="#">Nu in Humo</a></li>
              </ul>
            </article>
            <article class="footer__column">
              <h5>Humor</h5>
              <ul>
                <li><a href="#">Fotospecials</a></li>
                <li><a href="#">Cartoons</a></li>
                <li><a href="#">Uitlaat</a></li>
                <li><a href="#">(Bulderlacht)</a></li>
                <li><a href="#">Doe het zelf</a></li>
                <li><a href="#">Humo's Comedy Cup</a></li>
              </ul>
            </article>
            <article class="footer__column">
              <h5>Tv/Film</h5>
              <ul>
                <li><a href="#">TV-Gids</a></li>
                <li><a href="#">TV-Tips</a></li>
                <li><a href="#">TV-Reviews</a></li>
                <li><a href="#">Filmreviews</a></li>
                <li><a href="#">De 100 beste films volgens (ES)</a></li>
              </ul>
            </article>
            <article class="footer__column">
              <h5>Muziek</h5>
              <ul>
                <li><a href="#">Concertreviews</a></li>
                <li><a href="#">CD-Reviews</a></li>
                <li><a href="#">Humo's Rock Rally</a></li>
                <li><a href="#">Festivalitis</a></li>
              </ul>
            </article>
            <article class="footer__column">
              <h5>Boeken</h5>
              <ul>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Fictie</a></li>
                <li><a href="#">Non-Fictie</a></li>
                <li><a href="#">Het lezen zoals het is</a></li>
                <li><a href="#">De grootste schrijvers van deze tijd</a></li>
              </ul>
              <h5>Ga naar</h5>
              <ul>
                <li><a href="#">Video</a></li>
                <li><a href="#">Foto's</a></li>
                <li><a href="#">Wedstrijden</a></li>
                <li><a href="#">Zoekertjes</a></li>
                <li><a href="#">Apps</a></li>
              </ul>
            </article>
          </section>
        </div>
      </footer>
    <?php echo $js; ?>
  </body>
</html>
