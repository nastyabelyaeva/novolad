// Получение элемента счетчика 2
var counter2 = document.getElementById('counter2');

// Целевое значение счетчика
var target = 109;

// Шаг подсчета цифр
var step = 1;

// Флаг, указывающий, была ли запущена анимация
var started = false;

// Функция обновления счетчика
function updateCounter2() {
  // Проверка, был ли запущен счетчик
  if (!started) {
    // Получение координат элемента счетчика
    var rect = counter2.getBoundingClientRect();

    // Проверка, находится ли элемент счетчика в зоне видимости
    if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
      // Запуск анимации подсчета цифр
      started = true;
      var interval = setInterval(function() {
        // Получение текущего значения счетчика
        var current = parseInt(counter2.innerText);

        // Проверка, достигнут ли целевой значение
        if (current >= target) {
          clearInterval(interval);
          counter2.innerText = target;
        } else {
          // Подсчет цифр
          counter2.innerText = current + step;
        }
      }, 70);
    }
  }
}
// Инициализация анимации подсчета цифр при прокрутке страницы
window.addEventListener('scroll', updateCounter2);
