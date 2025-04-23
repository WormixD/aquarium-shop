//Increase image Jquery / Java Script
$(document).ready(function () {
  // Zmienna do śledzenia stanu obrazka (powiększony czy nie)
  var zoomed = false;

  // Po kliknięciu na obrazek
  $("#zoomedImage").click(function () {
    if (!zoomed) {
      // Powiększenie obrazka o 1.5 razy
      $(this).css("transform", "scale(2)");
    } else {
      // Przywrócenie oryginalnego rozmiaru
      $(this).css("transform", "scale(1)");
    }

    // Zmiana stanu
    zoomed = !zoomed;
  });
});
//slide bar from message button JQuery
$(document).ready(function () {
  $("#message-form").click(function () {
    $("#slideout").toggleClass("on");
  });
});
//Time counting
// Zadane czasy w sekundach

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
