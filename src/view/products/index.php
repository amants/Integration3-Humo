<section class="webshop__section webshop__highlight" style="background-image: url('https://via.placeholder.com/1022x300');">
  <h2 class="hidden">Highlight book</h2>
  <div class="highlight__bottombar">
    <div class="bottombar__title">
      <label class="bottombar__title">The Road -</label><label class="bottombar__author"> Cormac McCarthy</label>
    </div>
    <div class="bottombar__cta">
      <a class="bottombar__button" href="">Ontdek hier</a>
    </div>
  </div>
</section>
<section class="webshop__section">
  <h2>Boeken</h2>
  <a class="goto__list" href="/webshop/boeken">Bekijk alle boeken</a>
  <div class="webshop__books">
    <?php
      foreach($books as $book){
    ?>
    <a href="/webshop/<?php echo $book["id"]; ?>" class="book">
      <div class="book__image">
        <div class="book_price">
          <?php
            if ($book["discount"] > 0) {
          ?>
            <label class="old__price">&euro; <?php echo number_format(round($book["price"], 2), 2, ',', ' '); ?></label><label class="new__price">&euro; <?php echo number_format(round(($book["price"] - $book["price"] / 100 * $book["discount"]), 2), 2, ',', ' '); ?></label>
          <?php
            } else {
          ?>
              <label class="new__price">&euro; <?php echo number_format(round($book["price"], 2), 2, ',', ' '); ?></label>
          <?php
            }
          ?>
        </div>
        <img src="/assets/images/products/<?php echo $book["thumbnail"]; ?>" alt="" />
      </div>
      <p class="book__author"><?php echo $book["author"]; ?></p>
      <h3 class="book__title"><?php echo $book["name"]; ?></h3>
    </a>
    <?php
      }
    ?>
  </div>
</section>
<section class="webshop__section">
  <h2>Gadgets</h2>
  <a class="goto__list" href="/webshop/gadgets">Bekijk alle gadgets</a>
  <div class="webshop__books">
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">19.99</label><label class="new__price">4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">E 19.99</label><label class="new__price">E 4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">19.99</label><label class="new__price">4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">19.99</label><label class="new__price">4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">19.99</label><label class="new__price">4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
  </div>
</section>
<section class="webshop__section">
  <h2>Abonnementen</h2>
  <div class="webshop__books">
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">19.99</label><label class="new__price">4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">E 19.99</label><label class="new__price">E 4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">19.99</label><label class="new__price">4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">19.99</label><label class="new__price">4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
    <a href="/" class="book">
      <div class="book__image">
        <div class="book_price">
          <label class="old__price">19.99</label><label class="new__price">4.99</label>
        </div>
        <img src="https://via.placeholder.com/190x150" alt="" />
      </div>
      <h3 class="book__title">Titel</h3>
    </a>
  </div>
</section>