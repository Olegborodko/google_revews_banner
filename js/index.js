(function () {
  var swiper = new Swiper(".custom-ti-swiper", {
    slidesPerView: 4,
    spaceBetween: 16,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    watchOverflow: true,
    breakpoints: {
      // when window width is >= 320px
      1: {
        slidesPerView: 1,
        spaceBetween: 16,
      },
      630: {
        slidesPerView: 2,
        spaceBetween: 16
      },
      890: {
        slidesPerView: 3,
        spaceBetween: 16
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 16
      }
    }
  });

  // ------------ read more btn
  document.addEventListener("DOMContentLoaded", function () {
    var contents = document.querySelectorAll('.ti-swiper-container');

    contents.forEach(function (content) {
      var text = content.querySelector('.desc');
      var btn = content.querySelector('.ti-read-more');

      // Проверяем, если текст выходит за границы блока
      if (text.offsetHeight < text.scrollHeight) {
        btn.style.display = 'block'; // Отображаем кнопку
      }

      btn.addEventListener('click', function () {
        text.classList.toggle('expanded'); // Добавляем/удаляем класс для разворачивания блока
        if (text.classList.contains('expanded')) {
          btn.textContent = 'Read less'; // Если текст развернут, меняем текст кнопки
        } else {
          btn.textContent = 'Read more'; // Если текст свернут, меняем текст кнопки
        }
      });
    });
  });

})();
