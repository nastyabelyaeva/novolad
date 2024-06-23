// Получение элемента счетчика 1
var counter1 = document.getElementById('counter1');

// Целевое значение счетчика
var target = 26;

// Шаг подсчета цифр
var step = 3;

// Флаг, указывающий, была ли запущена анимация
var started = false;

// Функция обновления счетчика
// Функция обновления счетчика
function updateCounter1() {
    // Проверка, был ли запущен счетчик
    if (!started) {
      // Получение координат элемента счетчика
      var rect = counter1.getBoundingClientRect();

      // Проверка, находится ли элемент счетчика в зоне видимости
      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        // Запуск анимации подсчета цифр
        started = true;
        var interval = setInterval(function() {
          // Получение текущего значения счетчика
          var current = parseInt(counter1.innerText);

          // Проверка, достигнут ли целевой значение
          if (current >= target) {
            clearInterval(interval);
            counter1.innerText = target;
            started = false; // Сброс флага после завершения анимации
          } else {
            // Подсчет цифр
            counter1.innerText = current + step;
          }
        }, 70);
      }
    }
  }

// Инициализация анимации подсчета цифр при прокрутке страницы
window.addEventListener('scroll', updateCounter1);






