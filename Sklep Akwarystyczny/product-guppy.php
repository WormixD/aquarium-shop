<!DOCTYPE html>
<html lang="pl">
  <head>
    <link rel="stylesheet" href="css/style-product-guppy.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- jQuery lib -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script-gupy-product.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>aquario-akwaporadnik</title>
  </head>
  <body>
    <div class="discount">
      <p>🔥 ZNIŻKA na pompy i oświetlenie</p>
      <a class="anchor-links" href="#">Więcej tutaj</a>
      <p id="countdown"></p>
    </div>
    <div class="container">
      <header class="main-header">
        <div class="shop-name">
          <h1 class="first-name">🐠Aquario</h1>

          <h2 class="second-name">
            Sklep z <em><strong>pasją</strong></em>
          </h2>
        </div>
        <div class="search-panel">
          &#x1F50D; <input class="header-input" type="text" />
          <button>Szukaj</button>
        </div>
        <nav class="services">
          <ul>
            <li>
              <a class="anchors" href="index.php">🛍️Sklep</a>
            </li>
            <li>
              <a class="anchors" href="akwaporadnik.php">📗Akwaporadnik</a>
            </li>
            <li>
              <a class="anchors" href="flexbox.php">🧾Reklamacja</a>
            </li>
            <li>
              <a class="anchors" href="css-grid.php">📞Kontakt</a>
            </li>
          </ul>
        </nav>
        <div class="sign-in">
          <a href="moje-konto.php" class="header-anchor">🔒Moje konto</a>
        </div>
        <div class="basket">
          <a class="header-anchor" href="koszyk.php">🛒Mój koszyk</a>
          <p><span id="cart"></span></p>
        </div>
        <button id="message-form" type="button" class="message-button">
          Napisz<br />do<br />nas<br />❤
        </button>
      </header>
      <article>
        <header class="accesories">
          <a id="brand" href="#">Polecane marki</a>
          <a id="aquariums" href="#">Akwaria</a>
          <a id="co2" href="#">Zestawy CO2</a>
          <a id="fertilizers" href="#">Nawozy</a>
          <a id="subsoil" href="#">Substraty</a>
          <a id="food" href="#">Pokarmy</a>
          <a id="appendages" href="#">Akcesoria</a>
          <a id="plants" href="#">Rośliny</a>
          <a id="decorations" href="#">Dekoracje</a>
        </header>

        <div class="product">
          <h2 class="product-title">Gupik pawie oczko</h2>
          <img
            id="zoomedImage"
            src="pictures/gupik.png"
            alt="Gupik pawie oczko"
            height="250"
            width="250"
            class="product-img"
          />
          <div class="product-info">
            <div class="product-price">
              <p class="price"><strong>5.00zł</strong></p>
              <p class="shipping">Darmowa dostawa</p>
            </div>
            <p class="sale">Promocja</p>

            <p class="product-description">
              Gupik pawie oczko jest jedną z najbardziej rozpowszechnionych
              żyworodnych ryb...
            </p>
            <a href="#" target="_blank" class="more-info"
              >Więcej informacji o gupikach &rarr;</a
            >

            <div class="product-colors">
              <div class="color"></div>
              <div class="color color-blue"></div>
              <div class="color color-red"></div>
              <div class="color color-yellow"></div>
              <div class="color color-green"></div>
              <div class="color color-brown"></div>
            </div>
          </div>

          <div class="product-details">
            <h3 class="details-title">Opis</h3>
            <ul class="details-list">
              <li>Gupik pawie oczko – Poecilia reticulata</li>
              <li>Gupik samiec - mix kolorów i odmian</li>
              <li>Samice około 5 cm, samce do 3 cm</li>
            </ul>
          </div>
          <button onclick="addToCart()" class="add-cart">
            Dodaj do koszyka
          </button>
        </div>
      </article>

      <footer>
        <div class="troubles-bar">
          <p>Informacje</p>
          <p>Dostawa i płatność</p>
          <p>Gwarancja zwrotu do 14 dni</p>
        </div>
        <div class="contact-info">
          <ul>
            <li>+48 333 123 987</li>
            <li>sklep@Aquario.pl</li>
          </ul>
        </div>
        <div class="copywrite">
          <p>Copywrite &copy; 2023 Aquario</p>
          <p>
            U nas bezpiecznie kupisz leki OTC dla zwierząt. Nadzór sprawuje :
            Wojewódzki Inspektorat Weterynarii z/s w *** Adres: *** 11 22-333
            *** Tel:+48 12 345 67 89 Fax:+48 12 333 44 55 E-mail:***.gov.pl
            www:http://www.wiw.***.pl/
          </p>
        </div>
      </footer>
    </div>

    <aside>
      <div id="slideout">
        <div class="ramka">
          <form>
            <label for="imie">Imię</label>
            <input
              class="form-input"
              type="text"
              id="imie"
              name="imie"
              required
            />

            <label for="nazwisko">Nazwisko</label>
            <input
              class="form-input"
              type="text"
              id="nazwisko"
              name="nazwisko"
              required
            />

            <label for="email">Email</label>
            <input
              class="form-input"
              type="email"
              id="email"
              name="email"
              required
            />

            <label for="tytul">Tytuł</label>
            <input
              class="form-input"
              type="text"
              id="tytul"
              name="tytul"
              required
            />

            <label for="wiadomosc">Wiadomość</label>
            <textarea
              class="form-control"
              id="wiadomosc"
              name="wiadomosc"
              required
            ></textarea>

            <input class="form-button" type="submit" value="Wyślij" />
            <input class="form-button" type="reset" value="Wyczyść" />
          </form>
        </div>
      </div>

      <nav class="social-media">
        <p>Odwiedź nas na facebooku</p>
        <a href="#" class="fa fa-facebook"></a>
        <p>Zajrzyj na twittera</p>
        <a href="#" class="fa fa-twitter"></a>
        <p>Wpadaj na youtuba</p>
        <a href="#" class="fa fa-youtube"></a>
      </nav>
    </aside>
  </body>
</html>
