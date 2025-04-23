<!DOCTYPE html>
<html lang="pl">
  <head>
    <link rel="stylesheet" href="css/moje-konto.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- jQuery lib -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script-moje-konto.js"></script>
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
              <a class="anchors" href="flexbox.php">🧾Reklamacja</a>
            </li>
            <li>
              <a class="anchors" href="css-grid.php">📞Kontakt</a>
            </li>
          </ul>
        </nav>
        <div class="sign-in">
        <?php
        session_start();
    
        if(isset($_SESSION['user'])){
            // Jeśli użytkownik jest zalogowany, wyświetl przycisk "Wyloguj"
            echo '<form action="wyloguj.php" method="post">';
            echo '<button type="submit" class="header-anchor">🔓Wyloguj</button>';
            echo '</form>';
        } else {
            // Jeśli użytkownik nie jest zalogowany, wyświetl link do strony logowania
            echo '<a href="moje-konto.php" class="header-anchor">🔒Moje konto</a>';
        }
    ?>
        </div>
        <div class="basket">
          <a class="header-anchor" href="koszyk.php">🛒Mój koszyk</a>
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
        <?php
        // Sprawdź, czy użytkownik nie jest zalogowany
        if (!isset($_SESSION['user'])) {
            echo '<div class="register-form">';
            echo '<div class="ramka">';
            echo '<form action="zaloguj.php" method="post">';
            echo '<img class="login-picture" src="pictures/login.png" alt="sylwetka użytkownika" />';
            echo '<h1>Zaloguj się do swojego konta</h1>';
            echo '<label for="email-login"></label>';
            echo '<input class="form-input" type="email" id="email-login" name="email-login" placeholder="E-mail" required />';
            echo '<label for="password"></label>';
            echo '<input class="form-input" type="password" id="password" name="password" placeholder="Hasło" required />';
            echo '<input class="form-button" type="submit" value="Zaloguj" />';
            echo '<div class="forgot-password">';
            echo '<a class="anchors" href="#">Zapomniałem hasła</a>';
            echo '</div>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
        }
        else{
          echo '
          <div class="accesories">
    <a href="klienci.php">Klienci</a>
    <a href="zamowienia_klientow.php">Zamówienia klientów</a>
    <a href="wiadomosci.php">Wiadomości</a>
    <a href="#">Produkty</a>
</div>';
              }

    ?>
      </article>

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
    </div>
  </body>
</html>
<?php if (isset($error)): ?>
    <p class="error-message"><?= $error ?></p>
<?php endif; ?>