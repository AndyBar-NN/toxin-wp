<? get_header() ?>

<main class="hero">
    <div class="background swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero__slide hero__slide-1"></div>
            </div>
            <div class="swiper-slide">
                <div class="hero__slide hero__slide-2"></div>
            </div>
            <div class="swiper-slide">
                <div class="hero__slide hero__slide-3"></div>
            </div>
        </div>
    </div>
    <!-- /. swiper-container -->
    <div class="container_main">
        <div class="table">
            <form action="#" class="table__form">
                <h2 class="table__title">Найдём номера под ваши пожелания</h2>
                <div class="table__data">
                    <div class="table__arrival">
                        <label for="arrival" class="table__label">Прибытие</label>
                        <input id="start" class="datepickers arrival" placeholder="ДД.ММ.ГГГГ" readonly>
                        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow_down.svg" class="table__arrival--arrow" alt="">
                    </div>
                    <!-- /.table__arrival -->
                    <div class="table__departure">
                        <label for="departure" class="table__label">Выезд</label>
                        <input id="end" class="datepickers departure" placeholder="ДД.ММ.ГГГГ" readonly>
                        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow_down.svg" class="table__departure--arrow" alt="">
                    </div>
                    <!-- /.table__departure -->
                </div>
                <!-- /.table__data -->
                <div class="table__guest">
                    <label for="guest" class="table__label">Гости</label>
                    <input class="guest" placeholder="Сколько гостей" readonly>
                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow_down.svg" class="table__guest--arrow" alt="">
                    <div class="table__room">
                        <div class="table__adult">
                            <p class="table__heading">Взрослые</p>
                            <div class="table__buttons">
                                <button class="table__minus men__minus">-</button>
                                <p id="men" class="table__number">0</p>
                                <button class="table__plus men__plus">+</button>
                            </div>
                        </div>
                        <div class="table__children">
                            <p class="table__heading">Дети</p>
                            <div class="table__buttons">
                                <button class="table__minus child__minus">-</button>
                                <p id="child" class="table__number">0</p>
                                <button class="table__plus child__plus">+</button>
                            </div>
                        </div>
                        <div class="table__baby">
                            <p class="table__heading">Младенцы</p>
                            <div class="table__buttons">
                                <button class="table__minus baby__minus">-</button>
                                <p id="baby" class="table__number">0</p>
                                <button class="table__plus baby__plus">+</button>
                            </div>
                        </div>
                        <div class="button__interact">
                            <button id="clear" class="button__interact--clear">Очистить</button>
                            <button id="hide" class="button__interact--apply">Применить</button>
                        </div>
                    </div>
                </div>
                <!-- /.table__guest -->
                <a id="getRooms" class="search search__button">Подобрать номер<img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow_white.svg" class="search__arrow" alt=""></a>
            </form>
            <!-- /.table__form -->
        </div>
        <!-- /.table -->
    </div>
    <!-- /.container -->
</main>
<!-- /.hero -->

<? get_footer() ?>