'use strict'
$(document).ready(function () {
  // calendar
  var date = new Date();
  date.setDate(date.getDate() + 1);
  var endDate = new Date(date.getTime() + 365 * 24 * 60 * 60 * 1000);

  var startElem = $('#start'),
      startElemRoom = $('#startRoom'),
      endElem = $('#end');

  function getAbsPosition(element) {
    var rect = element.getBoundingClientRect();
    return {x:rect.left,y:rect.top}
  }

  var coords = getAbsPosition(document.querySelector('#table__form--date'));

  if(startElemRoom) {
    startElemRoom.datepicker({
      minDate: date,
      maxDate: endDate,
      range: true,
      multipleDatesSeparator: ' - ',
      onSelect: function (fd) {
        localStorage.setItem("datepickerDate", fd);
      }
    });
  }
  if(startElem) {
    startElem.datepicker({
      minDate: date,
      maxDate: endDate,
      onSelect: function (fd) {
        startElem.val(fd.split('-')[0]);
        endElem.val(fd.split('-')[1]);
      }
    });
  }
  if(endElem) {
    endElem.click(function () {
      if (!$('.datepicker').hasClass('active')) {
        $('.datepicker').addClass('active');
        $('.datepicker').css({'left': `${coords.x + 31}px`, 'top': `${coords.y + 201}px`});
      }
    });
  }

  $('#getRooms').click(function () {
    // создадим пустой объект
    var $data = {};
    // переберём все элементы input, textarea и select формы
    $('.table__form').find('input').each(function () {
      // значение свойства – значение свойство value элемента
      $data[this.name] = $(this).val().trim();
    });
  });

  // swiper-slide
  const swiper = new Swiper('.swiper-container', {
    allowTouchMove: false,
    speed: 5000,
    autoplay: {
      delay: 15000,
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
  });
});

document.addEventListener("DOMContentLoaded", function(event) {
// dropdown guest
  let tableRoom = document.querySelector('.table__room'),
      clearBtn = document.querySelector('#clear'),
      countGuest = document.querySelectorAll('.guest'),
      men = document.querySelector('#men'),
      child = document.querySelector('#child'),
      baby = document.querySelector('#baby');

  let sum = {
    mens: 0,
    childrens: 0,
    babies: 0
  };

// adding guests
  function itemGuest() {
    countGuest.forEach((item) => {
      item.value = sum.mens + sum.childrens + sum.babies;
      if (item.value == 1) {
        item.value += ' гость';
      } else if (item.value > 1 && item.value <= 4) {
        item.value += ' гостя';
      } else if (item.value > 4) {
        item.value += ' гостей';
      } else {
        item.value = '';
      }
    });
  }

  tableRoom.addEventListener('click', (e) => {
    e.preventDefault();
    if (e.target && e.target.matches("button.men__plus")) {
      if (sum.mens >= 4) {
        return sum.mens;
      }
      sum.mens++;
      men.textContent = sum.mens;
      itemGuest();
    }
    if (e.target && e.target.matches("button.men__minus")) {
      if (sum.mens <= 0) {
        return sum.mens;
      }
      sum.mens--;
      men.textContent = sum.mens;
      itemGuest();
    }
    if (e.target && e.target.matches("button.child__plus")) {
      if (sum.childrens >= 2) {
        return sum.childrens;
      }
      sum.childrens++;
      child.textContent = sum.childrens;
      itemGuest();
    }
    if (e.target && e.target.matches("button.child__minus")) {
      if (sum.childrens <= 0) {
        return sum.childrens;
      }
      sum.childrens--;
      child.textContent = sum.childrens;
      itemGuest();
    }
    if (e.target && e.target.matches("button.baby__plus")) {
      if (sum.babies >= 2) {
        return sum.babies;
      }
      sum.babies++;
      baby.textContent = sum.babies;
      itemGuest();
    }
    if (e.target && e.target.matches("button.baby__minus")) {
      if (sum.babies <= 0) {
        return sum.babies;
      }
      sum.babies--;
      baby.textContent = sum.babies;
      itemGuest();
    }
  });

// clear
  clearBtn.addEventListener('click', (e) => {
    e.preventDefault();
    countGuest.forEach(item => item.value = '');
    sum.mens = 0;
    sum.childrens = 0;
    sum.babies = 0;
    men.textContent = 0;
    child.textContent = 0;
    baby.textContent = 0;
  });
// rooms
// noUiSlider
  var nonLinearStepSlider = document.getElementById('slider-non-linear-step');
  if(nonLinearStepSlider) {
    noUiSlider.create(nonLinearStepSlider, {
      start: [5000, 10000],
      step: 10,
      connect: true,
      range: {
        'min': 0,
        'max': 16000
      },
      format: wNumb({
        thousand: ' '
      })
    });
    var nonLinearStepSliderValueElement = document.getElementById('slider-non-linear-step-value');
    nonLinearStepSlider.noUiSlider.on('update', function (values) {
      nonLinearStepSliderValueElement.innerHTML = values.join('₽ - ') + `₽`;
    });
  }

//
  let tableBedroom = document.querySelector('.table__bedroom'),
      countConveniences = document.querySelector('.conveniences'),
      bedroom = document.querySelector('#bedroom'),
      bed = document.querySelector('#bed'),
      bathroom = document.querySelector('#bathroom');

  let bedrooms = 0,
      beds = 0,
      bathrooms = 0;

  function itemBed() {
    countConveniences.value = bedrooms + beds + bathrooms;
    if (countConveniences.value == 1) {
      countConveniences.value += ' комната';
    } else if (countConveniences.value > 1 && countConveniences.value <= 4) {
      countConveniences.value += ' комнаты';
    } else if (countConveniences.value > 4) {
      countConveniences.value += ' комнат';
    } else {
      countConveniences.value = '';
    }
  }

//
  if(tableBedroom) {
    tableBedroom.addEventListener('click', (e) => {
    e.preventDefault();
    if (e.target && e.target.matches("button.bedroom__plus")) {
      if (bedrooms >= 2) {
        return bedrooms;
      }
      bedrooms++;
      bedroom.textContent = bedrooms;
      itemBed();
    }
    if (e.target && e.target.matches("button.bedroom__minus")) {
      if (bedrooms <= 0) {
        return bedrooms;
      }
      bedrooms--;
      bedroom.textContent = bedrooms;
      itemBed();
    }
    if (e.target && e.target.matches("button.bed__plus")) {
      if (beds >= 4) {
        return beds;
      }
      beds++;
      bed.textContent = beds;
      itemBed();
    }
    if (e.target && e.target.matches("button.bed__minus")) {
      if (beds <= 0) {
        return beds;
      }
      beds--;
      bed.textContent = beds;
      itemBed();
    }
    if (e.target && e.target.matches("button.bathroom__plus")) {
      if (bathrooms >= 2) {
        return bathrooms;
      }
      bathrooms++;
      bathroom.textContent = bathrooms;
      itemBed();
    }
    if (e.target && e.target.matches("button.bathroom__minus")) {
      if (bathrooms <= 0) {
        return bathrooms;
      }
      bathrooms--;
      bathroom.textContent = bathrooms;
      itemBed();
    }
  });
  }
});