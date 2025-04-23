//slide bar from message button & form managemet JQuery
$(document).ready(function () {
  // Czekaj, aż dokument (strona) zostanie w pełni załadowana
  $("#message-form").click(function () {
    // Wybierz element o id "message-form" i dodaj do niego zdarzenie kliknięcia
    $("#slideout").toggleClass("on");
    // Wybierz element o id "slideout" i przełącz (toggle) klasę "on"
    // To oznacza, że jeśli klasa "on" już istnieje, zostanie usunięta, a jeśli nie istnieje, zostanie dodana.
  });
});

// paralax effect (mouse cursor)
// $(document).ready(function () {
//   $(".parallax-container").mousemove(function (e) {
//     var moveX = (e.pageX * -1) / 15;
//     var moveY = (e.pageY * -1) / 15;
//     $(this)
//       .find(".parallax-layer")
//       .css("background-position", moveX + "px " + moveY + "px");
//   });
// });

// paralax effect (mouse scroll) Java Scirpt
document.addEventListener("DOMContentLoaded", function () {
  // Czekaj, aż dokument (strona) zostanie w pełni załadowana

  var parallaxLayer = document.querySelector(".parallax-layer");
  // Znajdź pierwszy element pasujący do selektora ".parallax-layer"

  window.addEventListener("scroll", function () {
    // Dodaj nasłuchiwanie zdarzenia scroll na obiekcie window (okno przeglądarki)
    var scrollPosition = window.scrollY;
    // Pobierz aktualną pozycję przewijania w pionie (w pikselach)

    parallaxLayer.style.transform =
      "translateY(" + scrollPosition * 0.3 + "px)";
    // Ustaw styl transformacji dla elementu ".parallax-layer"
    // W tym przypadku, przesuń element w pionie o 0.3 razy wartość aktualnej pozycji przewijania
  });
});

//SLIDER JQuery
//jQuery (obsługa zdarzeń myszy i manipulacja stylami)
// Funkcja autoSlide:

// Pobiera elementy o nazwie "frame" (radio buttony).
// Sprawdza, który z tych elementów jest zaznaczony (checked).
// Ustala bieżącą klatkę (frame) na podstawie zaznaczonego elementu.
// Oblicza indeks następnej klatki, używając reszty z dzielenia przez ilość wszystkich klatek.
// Symuluje kliknięcie na następną klatkę, co prowadzi do automatycznego przełączania klatek w określonym interwale.
// setInterval:
// Uruchamia funkcję autoSlide co 3000 milisekund (czyli co 3 sekundy), co powoduje automatyczne przełączanie klatek w karuzeli.
// Zdarzenia myszy na elemencie "#brand":
// Przechwytuje zdarzenie "mouseenter" (najechanie myszą na element).
// Zapobiega domyślnej akcji tego zdarzenia (event.preventDefault()).
// Ustawia styl elementu "#brand-div", aby był widoczny (display: "block", visibility: "visible").
// Przechwytuje zdarzenie "mouseleave" (opuszczenie myszy z elementu).
// Ustawia styl elementu "#brand-div", aby był ukryty (display: "none", visibility: "hidden").

function autoSlide() {
  var frames = document.getElementsByName("frame");
  var currentFrame;

  for (var i = 0; i < frames.length; i++) {
    if (frames[i].checked) {
      currentFrame = i;
      break;
    }
  }

  // Auto slide to the next frame
  var nextFrame = (currentFrame + 1) % frames.length;
  frames[nextFrame].click();
}

setInterval(autoSlide, 3000); // 3000 milliseconds = 5 seconds

$("#brand").mouseenter(function (event) {
  event.preventDefault(); // Zapobiega domyślnej akcji kliknięcia
  // Styles to show the box
  $("#brand-div").css({
    display: "block", // or any other property to make it visible
    visibility: "visible",
  });
});

$("#brand").mouseleave(function () {
  // Styles to hide the box
  $("#brand-div").css({
    display: "none",
    visibility: "hidden",
  });
});

//Time counting Java Script

var daysInSeconds = 6 * 24 * 60 * 60;
var hoursInSeconds = 8 * 60 * 60;
var minutesInSeconds = 31 * 60;
var seconds = 51;

var totalTimeInSeconds =
  daysInSeconds + hoursInSeconds + minutesInSeconds + seconds;

function formatTime(timeInSeconds) {
  var days = Math.floor(timeInSeconds / (24 * 60 * 60));
  var hours = Math.floor((timeInSeconds % (24 * 60 * 60)) / (60 * 60));
  var minutes = Math.floor((timeInSeconds % (60 * 60)) / 60);
  var remainingSeconds = timeInSeconds % 60;

  return {
    days: days,
    hours: hours,
    minutes: minutes,
    seconds: remainingSeconds,
  };
}

function updateCountdown() {
  var countdownParagraph = document.getElementById("countdown");

  if (totalTimeInSeconds > 0) {
    var formattedTime = formatTime(totalTimeInSeconds);
    var countdownText = `Dni: ${formattedTime.days}, Godzin: ${formattedTime.hours}, Minut: ${formattedTime.minutes}, Sekund: ${formattedTime.seconds}`;
    countdownParagraph.textContent = countdownText;

    totalTimeInSeconds--;

    // Zapisz aktualny czas do localStorage
    localStorage.setItem("countdownTime", totalTimeInSeconds);
  } else {
    countdownParagraph.textContent = "Czas minął!";
    clearInterval(intervalId);

    // Wyczyść czas z localStorage po zakończeniu odliczania
    localStorage.removeItem("countdownTime");
  }
}

// Sprawdź, czy istnieje zapisany czas w localStorage
var storedTime = localStorage.getItem("countdownTime");
if (storedTime) {
  totalTimeInSeconds = parseInt(storedTime, 10);
}

// Uruchomienie funkcji co sekundę
var intervalId = setInterval(updateCountdown, 1000);

//DODAWANIE DO KOSZYKA +1 Java Script

function updateCart() {
  const cartElement = document.getElementById("cart");
  let cartCount = localStorage.getItem("cartCount");

  if (!cartCount) {
    cartCount = 0;
    localStorage.setItem("cartCount", cartCount);
  }

  if (cartCount === 0) {
    cartElement.textContent = "Koszyk jest pusty";
  } else {
    cartElement.textContent = `Produkty: ${cartCount}`;
  }
}

// Funkcja do dodawania produktu do koszyka
function addToCart() {
  let cartCount = localStorage.getItem("cartCount");
  if (cartCount) {
    cartCount = parseInt(cartCount, 10);
  } else {
    cartCount = 0;
  }
  cartCount++;
  localStorage.setItem("cartCount", cartCount);
  updateCart();
}

//Resetowanie licznika produktów
document.addEventListener("DOMContentLoaded", function () {
  updateCart();
});

function resetCart() {
  localStorage.setItem("cartCount", 0);
  cartElement = 0;
  updateCart();
}
