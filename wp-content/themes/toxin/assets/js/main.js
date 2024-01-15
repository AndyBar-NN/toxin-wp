'use strict'
$(document).ready(function () {
  // calendar
  var date = new Date();
  date.setDate(date.getDate() + 1);
  var endDate = new Date(date.getTime() + 365 * 24 * 60 * 60 * 1000);

  var startElem = $('#start'),
      endElem = $('#end');

  startElem.datepicker({
    minDate: date,
    maxDate: endDate,
    onSelect: function (fd) {
      startElem.val(fd.split('-')[0]);
      endElem.val(fd.split('-')[1]);
    }
  });
  endElem.click(function () {
    if (!$('.datepicker').hasClass('active')) {
      $('.datepicker').addClass('active');
      $('.datepicker').css({'left': '403px', 'top': '341.1px'});
    }
  });

  $('#getRooms').click(function () {
    // создадим пустой объект
    var $data = {};
    // переберём все элементы input, textarea и select формы с id="myForm "
    $('.table__form').find('input').each(function () {
      // добавим новое свойство к объекту $data
      // имя свойства – значение атрибута name элемента
      // значение свойства – значение свойство value элемента
      $data[this.name] = $(this).val().trim();
    });
  });
  /*$(document).click(function (e) {
      if (!$(".datepickers").is(e.target) ||
          ($('.datepicker').is(e.target) &&
          $('.datepicker').has(e.target).length == 0)) {
          $('.datepicker').removeClass('active');
      }
  });*/

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

// dropdown guest
const tableRoom = document.querySelector('.table__room'),
    clearBtn = document.querySelector('#clear');
let countGuest = document.querySelectorAll('.guest');
let men = document.querySelector('#men'),
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

// room
const tableForm = document.querySelector('.table__form'),
    getIndex = document.querySelector('#getIndex'),
    inputStart = document.querySelector('#start'),
    inputEnd = document.querySelector('#end'),
    inputGuest = document.querySelector('.guest'),
    roomBg = document.querySelector('.room__background'),
    roomFees = document.querySelector('.room__fees');

function sendForm() {
  if (inputStart.value &&
      inputEnd.value &&
      inputGuest.value) {
    tableForm.reset();
    document.location.href = "index.html";
  } else {
    alert('Не указана дата или число гостей');
  }
}

function createNumber() {
  function createBackground() {
    const background = `
    <img src="img/room/image.1.1.jpg" alt="">
    <div class="room__background--col">
      <img class="room__background--small" src="img/room/image.1.2.jpg" alt="">
      <img class="room__background--small" src="img/room/image.1.3.jpg" alt="">
    </div>
  `;
    roomBg.insertAdjacentHTML('afterbegin', background);
  }

  function createForm() {
    const data = `
    <div class="room__data--number">
      <span class="room__number--elem">№</span>
      <span class="room__number--big">888</span>
      <span class="room__luks">люкс</span>
    </div>
    <div class="room__data--cash">
      <span class="room__cash">9 990₽</span>
      <span class="room__day">в сутки</span>
    </div>
  `;
    roomFees.insertAdjacentHTML('afterbegin', data);
  }

  createBackground();
  createForm();
}

//
getIndex.addEventListener('click', (e) => {
  e.preventDefault();
  sendForm();
});

createNumber();

// rooms
// noUiSlider
var nonLinearStepSlider = document.getElementById('slider-non-linear-step');
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

//
const tableBedroom = document.querySelector('.table__bedroom'),
    roomsElem = document.querySelector('.rooms__elem');
let countConveniences = document.querySelector('.conveniences'),
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
const getData = async function (url) {
  const response = await fetch(url); // запрос

  if (!response.ok) {
    throw new Error(`Ошибка ${url}, статус ошибки ${response.status}`);
  }

  return await response.json();
};

function createRooms(item) {
  const {image, number, luks, price, star, feedback, room} = item;

  const num = `
    <a class="room" data-number="${room}">
      <div class="room__img">
        <img class="room__img--elem" src="${image}" alt="">
        <div class="room__left"></div>
        <div class="room__right"></div>
      </div>
      <div class="room__data">
        <div class="room__data--number">
          <span class="room__number--elem">№</span>
          <span class="room__number">${number}</span>
          <span class="room__luks">${luks}</span>
        </div>
        <div class="room__data--cash">
          <span class="room__cash">${price}₽</span>
          <span class="room__day">в сутки</span>
        </div>
      </div>
      <hr class="room__data--content">
      </hr>
      <div class="room__rating">
        <div class="room__rating--star">
          <img src="${star}" alt="" class="star">
        </div>
        <div class="room__rating--comment">
          <div class="room__comment">${feedback}</div>
          <div class="room__comment--elem">Отзывов</div>
        </div>
      </div>
    </a>
  `;

  roomsElem.insertAdjacentHTML('beforeend', num);
}

function openRoom(e) {
  const room = e.target.closest('.room');

  if (room) {
    getData(`./db/${room.dataset.number}`).then(function (data) {
      data.forEach(() => {
        document.location.href = "room.html";
      });
    });
  }
}

roomsElem.addEventListener('click', openRoom);

//
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

getData('./db/rooms.json').then(function (data) { // then обрабатывает промисы
  data.forEach(createRooms);
});