<!DOCTYPE html>
<html lang="pl">
  <head>
    <link rel="stylesheet" href="css/koszyk.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- jQuery lib -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script-koszyk.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>aquario</title>
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
              <a class="anchors" href="#">🧾Reklamacja</a>
            </li>
            <li>
              <a class="anchors" href="#">📞Kontakt</a>
            </li>
          </ul>
        </nav>
        <div class="sign-in">
        <?php
    session_start();
    
    if(isset($_SESSION['user'])){
        // Jeśli użytkownik jest zalogowany, wyświetl informacje o zalogowanym użytkowniku
        echo '<a href="moje-konto.php" class="header-anchor">🔒'.$_SESSION['user'].'</a>';
    } else {
        // Jeśli użytkownik nie jest zalogowany, wyświetl link do strony logowania
        echo '<a href="moje-konto.php" class="header-anchor">🔒Moje konto</a>';
    }
    ?>
        </div>
        <div class="basket">
          <a class="header-anchor" href="#">🛒Mój koszyk</a>
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
        <!-- SLIDER -->
        <div class="basket-info">
          <h1>Koszyk</h1>
          <p>W koszyku jeszcze nie ma żadnych produktów.</p>
        </div>
        <div class="help">
          <p>Wysyłka w 24h</p>
          <p>Magazyn 1000 m2</p>
          <p>Zwrot do 14 dni</p>
          <p>Fachowe doradztwo</p>
        </div>
        <div class="payment">
          <p>Możesz zapłacić przez</p>
          <img
            class="payment-picture"
            src="pictures/payment.png"
            alt="metody płatności online"
          />
          <p>Płatność przy odbiorze / Przelew / Gotówka</p>
          <p>Transport INPOST</p>
        </div>
        <div class="recomendation">
          <h2>Ponad 98% klientów poleciłoby nas swoim znajomym!</h2>
          <p>
            Zakupy u nas są bezpieczne, wygodne, szybkie, a dodatkowo oszczędne.
            Jak podaje serwer Ceneo.pl, ponad 90% klientów poleciłoby nas swoim
            znajomym (obecnie mamy ponad 1500 recenzji na ceneo.pl).
          </p>
          <p>Zobacz więcej recenzji</p>
        </div>
        <div class="opinions">
          <h2>Andrzej P</h2>
          <img
            class="client-picture"
            src="pictures/client.png"
            alt="obrazek zadowolonego klienta"
          />
          <p>
            + Nigdy nie zawodzą + Niskie ceny + Szybka komunikacja i dostawa
            Bardzo dobra komunikacja, doradztwo, towar był w dobrym stanie.
            Jestem również zadowolony z filtra Sunsun HW-703B. Łatwa obsługa,
            lampa UV działa jak należy.
          </p>
        </div>
      </article>
      <div class="newsletter">
        <h3>Rozpocznij swoją przygodę z nami</h3>
        <p>
          NIC JUŻ PAŃSTWU NIE UMKNIE Nowości, artykuły, inspircje, zniżki, to
          wszystko będą Państwo otrzymywać od nas regularnie, co tydzień.
          Wystarczy podać nam Wasz adres email.
        </p>
        <a class="other-anchors" href="#">Zapisz się już teraz!</a>
      </div>
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
        <form
              action="formularz.php"
              method="post"
              enctype="multipart/form-data"
            >
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

              <label for="akceptacja">Akceptuję przetwarzanie danych</label>
              <input
                type="checkbox"
                id="akceptacja"
                name="akceptacja"
                required
              />

              <input type="file" name="plik" id="file" />
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
