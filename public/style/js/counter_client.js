// Получение элементов счетчиков
var counter1 = document.getElementById('counter1');
var counter2 = document.getElementById('counter2');
var counter3 = document.getElementById('counter3');

// Целевые значения счетчиков
var target1 = 26;
var target2 = 109;
var target3 = 51;

// Шаг подсчета цифр
var step1 = 3;
var step2 = 3;
var step3 = 3;

// Флаги, указывающие, была ли запущена анимация
var started1 = false;
var started2 = false;
var started3 = false;

function updateCounter1() {
    // Проверка, был ли запущен счетчик
    if (!started1) {
      // Получение координат элемента счетчика
      var rect = counter1.getBoundingClientRect();

      // Проверка, находится ли элемент счетчика в зоне видимости
      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        // Запуск анимации подсчета цифр
        started1 = true;
        var interval = setInterval(function() {
          // Получение текущего значения счетчика
          var current = parseInt(counter1.innerText);

          // Проверка, достигнут ли целевой значение
          if (current >= target1) {
            clearInterval(interval);
            counter1.innerText = target1;
            started1 = false; // Сброс флага после завершения анимации
          } else {
            // Подсчет цифр
            counter1.innerText = current + step1;
          }
        }, 70);
      }
    }
  }

  function updateCounter2() {
    // Проверка, был ли запущен счетчик
    if (!started2) {
      // Получение координат элемента счетчика
      var rect = counter2.getBoundingClientRect();

      // Проверка, находится ли элемент счетчика в зоне видимости
      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        // Запуск анимации подсчета цифр
        started2 = true;
        var interval = setInterval(function() {
          // Получение текущего значения счетчика
          var current = parseInt(counter2.innerText);

          // Проверка, достигнут ли целевой значение
          if (current >= target2) {
            clearInterval(interval);
            counter2.innerText = target2;
            started2 = false; // Сброс флага после завершения анимации
          } else {
            // Подсчет цифр
            counter2.innerText = current + step2;
          }
        }, 70);
      }
    }
  }

  function updateCounter3() {
    // Проверка, был ли запущен счетчик
    if (!started3) {
      // Получение координат элемента счетчика
      var rect = counter3.getBoundingClientRect();

      // Проверка, находится ли элемент счетчика в зоне видимости
      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        // Запуск анимации подсчета цифр
        started3 = true;
        var interval = setInterval(function() {
          // Получение текущего значения счетчика
          var current = parseInt(counter3.innerText);

          // Проверка, достигнут ли целевой значение
          if (current >= target3) {
            clearInterval(interval);
            counter3.innerText = target3;
            started3 = false; // Сброс флага после завершения анимации
          } else {
            // Подсчет цифр
            counter3.innerText = current + step3;
          }
        }, 70);
      }
    }
  }

  // Инициализация анимаций подсчета цифр при прокрутке страницы
  window.addEventListener('scroll', updateCounter1);
  window.addEventListener('scroll', updateCounter2);
  window.addEventListener('scroll', updateCounter3);
