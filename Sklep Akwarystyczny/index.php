<!DOCTYPE html>
<html lang="pl">
  <head>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- jQuery lib -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script.js"></script>
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
          <button onclick="resetCart()" id="reset-button">Szukaj</button>
        </div>
        <nav class="services">
          <ul>
            <li>
              <a class="anchors" href="#">🛍️Sklep</a>
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
        // Jeśli użytkownik jest zalogowany, wyświetl informacje o zalogowanym użytkowniku
        echo '<a href="moje-konto.php" class="header-anchor">🔒'.$_SESSION['user'].'</a>';
    } else {
        // Jeśli użytkownik nie jest zalogowany, wyświetl link do strony logowania
        echo '<a href="moje-konto.php" class="header-anchor">🔒Moje konto</a>';
    }
    ?>
          <!-- <a href="moje-konto.php" class="header-anchor">🔒Moje konto</a>
          <input class="basket-items" type="text" value="Wylogowany" /> -->
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
        <div id="brand-div">
          <p>Hello there</p>
        </div>
        <!-- SLIDER -->
        <div id="frame">
          <input type="radio" name="frame" id="frame1" checked />
          <input type="radio" name="frame" id="frame2" />
          <input type="radio" name="frame" id="frame3" />
          <div id="slides">
            <div id="overflow">
              <div class="inner">
                <div class="frame">
                  <img
                    src="pictures/krewetka.png"
                    alt="niebieska krewetka w akwarium"
                  />
                </div>
                <div class="frame">
                  <img
                    src="pictures/akwarium.jpg"
                    alt="zdjęcie akwarium firmy aquael 200l"
                  />
                </div>
                <div class="frame">
                  <img
                    src="pictures/filtr.png"
                    alt="zdjęcie filtra akwariowego firmy aquael"
                  />
                </div>
              </div>
            </div>
          </div>

          <div id="bullets">
            <label for="frame1"></label>
            <label for="frame2"></label>
            <label for="frame3"></label>
          </div>
        </div>
        <div class="bestseller">
          <div class="first-best">
            <p class="bestseller-name">Wężyk silikonowy</p>
            <img
              class="product-picture"
              src="pictures/wężyk.png"
              alt="wężyk silikonowy"
            />
            <p class="bestseller-name">Wysyłka w: 24 godziny</p>
            <p class="bestseller-price">1,29zł</p>
            <button onclick="addToCart()" class="anchors">Do koszyka</button>
          </div>
          <div class="second-best">
            <p class="bestseller-name">Zaworek regulacyjny</p>
            <img
              class="product-picture"
              src="pictures/zaworek.jpg"
              alt="zaworek wody do akwarium"
            />
            <p class="bestseller-name">Wysyłka w: 24 godziny</p>
            <p class="bestseller-price">3,50zł</p>
            <button onclick="addToCart()" class="anchors">Do koszyka</button>
          </div>
          <div class="third-best">
            <p class="bestseller-name">Substrat</p>
            <img
              class="product-picture"
              src="pictures/substrat.png"
              alt="substrat akwarystyczny"
            />
            <p class="bestseller-name">Wysyłka w: 24 godziny</p>
            <p class="bestseller-price">30,00zł</p>
            <button onclick="addToCart()" class="anchors">Do koszyka</button>
          </div>
          <div class="fourth-best">
            <p class="bestseller-name">Gupik</p>
            <a href="product-guppy.php">
              <img
                class="product-picture"
                src="pictures/gupik.png"
                alt="gupik pawie oko"
              />
            </a>
            <p class="bestseller-name">
              Wysyłka w: 24 godziny <br />Heatpack gratis przy zakupie 10 sztuk
            </p>
            <p class="bestseller-price">5zł</p>
            <button onclick="addToCart()" class="anchors">Do koszyka</button>
          </div>
        </div>
        <div class="benefits">
          <div class="products">
            <a class="benefits-anchor-picture" href="#">
              <img
                class="pulse-picture"
                src="pictures/voucher.png"
                alt="voucher rabatowy"
              />
            </a>
            <p class="benefits-desc">
              Topowe produkty cenionych marek w korzystnych cenach.
            </p>
          </div>
          <div class="delivery">
            <a href="#" class="benefits-anchor-picture">
              <img
                class="pulse-picture delivery-picture"
                src="pictures/delivery.png"
                alt="furgonetka z paczkami"
              />
            </a>
            <p class="benefits-desc">
              Bezpieczna,szybka i pewna dostawa na czas.
            </p>
          </div>
          <div class="loyalty-program">
            <a href="#" class="benefits-anchor-picture">
              <img
                class="pulse-picture"
                src="pictures/packages.png"
                alt="obrazek z paczkami"
              />
            </a>
            <p class="benefits-desc">
              Im dłużej jesteś z nami, tym Twoje zakupy będą tańsze. Sprawdź
              zasady programu rabatowego dla stałych klientów.
            </p>
          </div>
          <div class="client">
            <a href="#" class="benefits-anchor-picture">
              <img
                class="pulse-picture"
                src="pictures/client.png"
                alt="zadowolony klient emotikona"
              />
            </a>
            <p class="benefits-desc">
              10 lat doświadczenia w branży i kilkanaście tysięcyzadowolonych
              klientów rocznie.
            </p>
          </div>
        </div>
      </article>
      <div class="experience">
        <ul>
          <li>Nasz zespół składa się z doświadczonych akwarystów.</li>
        </ul>
        <ul>
          <li>Posiadamy produkty, których sami nie boimy się stosować.</li>
        </ul>
      </div>
      <div class="arrangement">
        <!-- PARALAX EFFECT -->
        <div class="parallax-container">
          <div class="parallax-layer"></div>
          <div class="parallax-content">
            <h1>SERWIS I ARANŻACJA BEZPŁATNA WYCENA</h1>
            <p>
              Firma Aquario od wielu lat zajmuje się projektowaniem, aranżacją
              oraz serwisowaniem akwariów dekoracyjnych i wystawowych. Tworzymy
              projekty akwariów do prywatnych mieszkań, biur...
            </p>
            <a href="#">Dowiedz się więcej</a>
          </div>
        </div>
      </div>
      <div class="newsletter">
        <h3>Aquario - Twój sklep akwarystyczny</h3>
        <p>
          Sklep został założony z myślą o wszystkich miłośnikach życia
          podwodnego
        </p>
        <h3>Rozpocznij swoją przygodę z nami</h3>
        <p>
          Nigdzie indziej niedostępne wskazówki i porady, topowe produkty w
          oczach ekspertów oraz zapowiedzi nowości - to wszystko znajdziesz w
          naszym newsletterze.
        </p>
        <a class="other-anchors" href="#">Zapisz się już teraz!</a>
      </div>
      <div class="history">
        <h3>Historia Akwarystyki</h3>
        <p>
          "Cierpliwość jest gorzka, ale jej owoce są słodkie"<br />
          <i>Arystoteles</i>
          <a class="other-anchors" href="podstrona.txt">Czytaj dalej</a>
        </p>
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
              <input class="form-button" type="submit" name="Wyslij" value="Wyślij"/>
              <input class="form-button" type="reset" value="Wyczyść" />
            </form>

          </div>
        </div>

        <div class="open-hours">
          <h2>Godziny otwarcia sklepu stacjonarnego</h2>

          <p>Sklep stacjonarny adres: Warszawa</p>
          <p>Czynny od poniedziałku do niedzieli.</p>
          <table class="table-hours">
            <tr>
              <td>Poniedziałek</td>
              <td>Wtorek</td>
              <td>Środa</td>
              <td>Czwartek</td>
              <td>Piątek</td>
              <td>Sobota</td>
              <td>Niedziela</td>
            </tr>
            <tr>
              <td>08.00-18.00</td>
              <td>08.00-18.00</td>
              <td>08.00-18.00</td>
              <td>08.00-18.00</td>
              <td>08.00-18.00</td>
              <td>09.00-13.00</td>
              <td>NIECZYNNE</td>
            </tr>
          </table>
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
  </body>
</html> 
