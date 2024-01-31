<? get_header() ?>

<div class="main__sidebar">
    <div class="container__main container__sidebar">
        <div class="sidebar">
            <div class="sidebar__data">
                <div class="sidebar__arrival">
                    <form action="#" id="table__form--date">
                        <label for="arrival" class="table__label">Даты пребывания в отеле</label>
                        <input id="startRoom" class="datepickers arrival sidebar__arrival--dates" placeholder="ДД.ММ.ГГГГ" readonly>
                        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow_down.svg" class="table__departure--arrow" alt="">
                    </form>
                </div>
            </div>
            <!-- /.sidebar__data -->
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
                <!-- /.table__room -->
            </div>
            <!-- /.table__guest -->
            <div class="table__elem">
                <div class="table__range">
                    <div class="table__label table__range--cash">Диапазон цены</div>
                    <div id="slider-non-linear-step-value" class="table__range--value"></div>
                </div>
                <div id="slider-non-linear-step" class="table__range--input"></div>
                <p class="table__text">Стоимость за сутки пребывания в номере</p>
            </div>
            <!-- /.table__elem -->
            <div class="table__checkbtn">
                <h2 class="table__label table__checkbtn--label">Checkbox Buttons</h2>
                <div class="checkbtn__elem">
                    <input type="checkbox" id="checkbtn__smoke" class="checkbtn" name="approval">
                    <label for="checkbtn__smoke" class="approval">Можно курить</label>
                </div>
                <div class="checkbtn__elem">
                    <input type="checkbox" id="checkbtn__animals" class="checkbtn" name="approval">
                    <label for="checkbtn__animals" class="approval">Можно с питомцами</label>
                </div>
                <div class="checkbtn__elem">
                    <input type="checkbox" id="checkbtn__guest" class="checkbtn" name="approval">
                    <label for="checkbtn__guest" class="approval">Можно пригласить гостей</label>
                    <span class="approval__text">(до 10 человек)</span>
                </div>
            </div>
            <!-- /.table__checkbtn -->
            <div class="table__checkbtn">
                <h2 class="table__label table__checkbtn--label">Доступность</h2>
                <div class="checkbtn__elem">
                    <input type="checkbox" id="checkbtn__wide" class="checkbtn" name="approval">
                    <label for="checkbtn__wide" class="approval availability">Широкий коридор</label>
                    <div class="availability__elem">
                        <span class="availability__text">Ширина коридоров в номере</br> не менее 91 см.</span>
                    </div>
                </div>
                <div class="checkbtn__elem">
                    <input type="checkbox" id="checkbtn__help" class="checkbtn" name="approval">
                    <label for="checkbtn__help" class="approval availability">Помощник для инвалидов</label>
                    <div class="availability__elem">
                        <span class="availability__text">На 1 этаже вас встретит специалист<br> и проводит до номера.</span>
                    </div>
                </div>
            </div>
            <!-- /.table__checkbtn -->
            <div class="sidebar__conveniences">
                <label for="guest" class="table__label">Удобства номера</label>
                <input id="countElem" class="bedroom conveniences" placeholder="Сколько..." readonly>
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow_down.svg" class="table__guest--arrow" alt="">
                <div class="table__bedroom">
                    <div class="table__adult">
                        <p class="table__heading">Спальни</p>
                        <div class="table__buttons">
                            <button class="table__minus bedroom__minus">-</button>
                            <p id="bedroom" class="table__number">0</p>
                            <button class="table__plus bedroom__plus">+</button>
                        </div>
                    </div>
                    <div class="table__children">
                        <p class="table__heading">Кровати</p>
                        <div class="table__buttons">
                            <button class="table__minus bed__minus">-</button>
                            <p id="bed" class="table__number">0</p>
                            <button class="table__plus bed__plus">+</button>
                        </div>
                    </div>
                    <div class="table__baby">
                        <p class="table__heading">Ванные комнаты</p>
                        <div class="table__buttons">
                            <button class="table__minus bathroom__minus">-</button>
                            <p id="bathroom" class="table__number">0</p>
                            <button class="table__plus bathroom__plus">+</button>
                        </div>
                    </div>
                </div>
                <!-- /.table__bedroom -->
            </div>
            <!-- /.table__conveniences -->
            <div class="table__checkbtn">
                <h2 id="countElem" class="table__label table__checkbtn--label">Дополнительные удобства<img
                            src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow_down.svg" class="table__checkbtn--arrow" alt=""></h2>
                <div class="sidebar__additional">
                    <div class="checkbtn__elem">
                        <input type="checkbox" id="checkbtn__breakfast" class="checkbtn" name="approval">
                        <label for="checkbtn__breakfast" class="approval">Завтрак</label>
                    </div>
                    <div class="checkbtn__elem">
                        <input type="checkbox" id="checkbtn__desk" class="checkbtn" name="approval">
                        <label for="checkbtn__desk" class="approval">Письменный стол</label>
                    </div>
                    <div class="checkbtn__elem">
                        <input type="checkbox" id="checkbtn__feeding" class="checkbtn" name="approval">
                        <label for="checkbtn__feeding" class="approval">Стул для кормления</label>
                    </div>
                    <div class="checkbtn__elem">
                        <input type="checkbox" id="checkbtn__crib" class="checkbtn" name="approval">
                        <label for="checkbtn__crib" class="approval">Кроватка</label>
                    </div>
                    <div class="checkbtn__elem">
                        <input type="checkbox" id="checkbtn__tv" class="checkbtn" name="approval">
                        <label for="checkbtn__tv" class="approval">Телевизор</label>
                    </div>
                    <div class="checkbtn__elem">
                        <input type="checkbox" id="checkbtn__shampoo" class="checkbtn" name="approval">
                        <label for="checkbtn__shampoo" class="approval">Шампунь</label>
                    </div>
                </div>
                <!-- /.sidebar__additional -->
            </div>
        </div>
        <!-- /.sidebar -->
        <div class="rooms">
            <h2 class="rooms__title">Номера, которые мы для вас подобрали</h2>
            <div class="rooms__elem">
                <?
                // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'   => 'rooms',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                global $post;
                foreach( $posts as $post ) : setup_postdata( $post );?>

                    <a href="<? the_permalink(); ?>" class="room">
                        <div class="room__img">
                            <? the_post_thumbnail('adv_thumbnail'); ?>
                            <div class="room__left"></div>
                            <div class="room__right"></div>
                        </div>
                        <div class="room__data">
                            <div class="room__data--number">
                                <span class="room__number--elem">№</span>
                                <span class="room__number"><? the_title(); ?></span>
                                <span class="room__luks">${luks}</span>
                            </div>
                            <div class="room__data--cash">
                                <span class="room__cash"><?= CFS()-> get('price'); ?> ₽</span>
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

                <? endforeach;

                wp_reset_postdata(); // сброс
                ?>
            </div>
            <!-- /.rooms__elem -->
        </div>
        <!-- /.rooms -->
    </div>
    <!-- /.container -->
</div>
<!-- /.main__sidebar -->

<? get_footer() ?>