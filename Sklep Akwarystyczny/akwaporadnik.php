<!DOCTYPE html>
<html lang="pl">
  <head>
    <link rel="stylesheet" href="css/style-akwaporadnik.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- jQuery lib -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script-akwaporadnik.js"></script>
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
          <a class="header-anchor" href="koszyk.php">🛒Mój koszyk</a>
        </div>
        <button id="message-form" type="button" class="message-button">
          Napisz<br />do<br />nas<br />❤
        </button>
      </header>
      <article>
        <header class="accesories">
          <a id="brand" href="akwaporadnik.php">Cykl azotowy</a>
          <a id="aquariums" href="#">Dobór gatunków ryb</a>
          <a id="co2" href="#">Rośliny w akwarium</a>
          <a id="fertilizers" href="#">Nawożenie krok po kroku</a>
          <a id="subsoil" href="#">Jak karmić ryby</a>
          <a id="food" href="#">Jakie akwarium wybrać</a>
          <a id="appendages" href="#">W co się zaopatrzyć</a>
          <a id="plants" href="#">Technika CO2</a>
          <a id="decorations" href="#">Aranżacja zbiornika</a>
        </header>
        <div class="guide-title">
          <h1>Akwa poradnik</h1>
        </div>
        <div class="guide">
          <div class="introduction">
            <h2>Cykl azotowy w akwarium – co to jest?</h2>
            <p>
              Informacje na temat cyklu azotowego w akwarium, który opiszemy
              poniżej, dla wielu osób mogą wydawać się nudne. Naszym zdaniem,
              zapoznanie się z nimi jest konieczne, by utrzymać zbiornik w
              dobrym stanie. Przemiany zachodzące w zbiorniku są określane jako
              cykl biologiczny, proces nitryfikacji lub syndrom nowego
              zbiornika. Wszystkie te nazwy odwołują się do jednego zjawiska –
              cyklu azotowego. Cykl azotowy w akwarium polega na rozwijaniu się
              korzystnych bakterii, które pomagają w przemianach amoniaku do
              azotynów i następnie azotynów do azotanów, które są nieszkodliwe
              dla ryb, jeśli są w niewielkim stężeniu.
            </p>
            <h2>Podstawy cyklu azotowego</h2>
            <p>
              Proces usuwania szkodliwych związków w nowym akwarium trwa od 2
              tygodni do nawet 2 miesięcy. Początkujący akwaryści bardzo często
              popełniają błąd, polegający na wpuszczaniu do akwarium ryb zaraz
              po założeniu zbiornika. Ponieważ nie ma w nim bakterii
              nitryfikacyjnych, ilość trujących związków błyskawicznie rośnie i
              może dojść do śmierci obsady. Najlepszym sposobem na śledzenie
              cyklu azotowego jest zakup testów, które pozwolą sprawdzić poziom
              amoniaku, azotanów, azotynów i pH wody.
            </p>
          </div>
          <div class="process-title">
            <h2>Etapy cyklu azotowego</h2>
          </div>
          <div class="stages">
            <div class="stage-1">
              <h3>Etap 1</h3>
              <p>
                Amoniak pojawia się w wodzie wraz z odchodami ryb i niezjedzonym
                pokarmem, albo kulturami służącymi do jego zaszczepiania.
                Odchody i nadmiar pożywienia zamieniają się w NH4 i NH3 –
                związki azotu różniące się ilością atomów wodoru.
              </p>
              <p>
                Amon (NH4) nie jest szkodliwy dla ryb, natomiast takie działanie
                ma NH3. To, jakie związki powstaną w akwarium, zależy od pH
                wody.
              </p>
              <p>
                Jeśli pH jest zasadowe, powstanie amon. Natomiast jeśli pH jest
                kwasowe, dojdzie do powstania amoniaku, dlatego warto
                monitorować także ten parametr wody.
              </p>
            </div>
            <div class="stages-arrow">
              <img
                class="arrow"
                src="pictures/strzałka.png"
                alt="czarna strzałka w prawo"
              />
            </div>
            <div class="stage-2">
              <h3>Etap 2</h3>
              <p>
                Zaczynają rozwijać się beztlenowe bakterie Nitrosomonas, które
                utleniają amoniak w zbiorniku i go eliminują. Wielu osobom
                wydaje się, że filtr ma za zadanie mechaniczne oczyszczanie
                wody, ale to tylko jedna z jego funkcji.
              </p>
              <p>
                Znacznie ważniejsze jest to, że stanowi on siedlisko dla
                bakterii rozkładających amoniak. Z tego powodu, nie można myć
                wkładu filtra w gorącej wodzie (zaleca się płukanie w wodzie z
                akwarium), ani wyłączać filtra na dłużej niż 2 godziny.
                Produktem ubocznym tego procesu są azotyny, z którymi także
                musimy sobie poradzić. Są one tak samo trujące dla ryb, jak
                amoniak.
              </p>
            </div>
            <div class="stages-arrow">
              <img
                class="arrow"
                src="pictures/strzałka.png"
                alt="czarna strzałka w prawo"
              />
            </div>
            <div class="stage-3">
              <h3>Etap 3</h3>
              <p>
                W zbiorku rozwijają się bakterie Nitrobacter, które zamieniają
                azotyny w azotany. Są one groźne dla ryb wtedy, gdy będą w dużym
                stężeniu.
              </p>
              <p>
                Najłatwiejszym sposobem na zmniejszenie ilości tych związków,
                jest częściowa podmiana wody. Warto regularnie sprawdzać ilość
                azotanów w wodzie i w razie potrzeby, dokonać podmiany wody.
              </p>
              <p>
                Bakterie Nitrobacter pojawiają się w zbiorniku samoczynnie, ale
                można przyśpieszyć ten proces, kupując odpowiednie kultury
                bakterii w sklepie akwarystycznym.
              </p>
              <p>
                Gdy ilość amoniaku i azotynów w wodzie dochodzi do zera, a
                rośnie ilość azotanów, można do zbiornika wpuścić ryby
                akwariowe. Taki stan utrzymuje się przez cały czas w prawidłowo
                utrzymanym akwarium.
              </p>
            </div>
          </div>
          <div class="picture-info">
            <img
              class="nitrogen-cycle"
              src="pictures/cykl_azotowy.jpg"
              alt="cykla azotowy na obrazku"
            />
          </div>
          <div class="reduction-info">
            <h2>Jak obniżyć poziom związków azotu w akwarium?</h2>
            <p>
              Sprawdzając regularnie poziom tych substancji! Aby to zrobić
              zaleca się kupić zestaw testów. Jeśli nie będziemy wiedzieć jaki
              jest poziom związków azotu, nie uda się nam go obniżyć.
              Podmieniając wodę. Filtry akwariowe nie redukują azotanów, dlatego
              należy co tydzień wymienić około 10 – 25% wody.
            </p>
            <p>
              Dobierając odpowiedni filtr. W akwariach często spotykamy się z
              małymi filtrami wewnętrznymi lub zewnętrznymi, które nie są w
              stanie zapewnić odpowiedniej równowagi biologicznej. Lepszym
              rozwiązaniem jest zakup większego filtra i ewentualne zmniejszenie
              prędkości przepływu wody, jeśli powoduje on jej zbyt duży ruch.
              Najistotniejszą rolę w filtrze odgrywa powierzchnia mediów
              filtracyjnych i ich właściwości oraz wspomniana już jego wydajność
              (l/h).
            </p>
            <p>
              Usuwając zanieczyszczenia z dna zbiornika – można do tego celu
              użyć odmulacza. Na bieżąco należy pozbywać się z akwarium martwych
              ryb i szczątków roślin, które rozkładając się będą zatruwały
              zbiornik.
            </p>
          </div>
        </div>
      </article>
      <div class="newsletter">
        <p>
          Nigdzie indziej niedostępne wskazówki i porady, topowe produkty w
          oczach ekspertów oraz zapowiedzi nowości - to wszystko znajdziesz w
          naszym newsletterze.
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
