<footer class="footer">
    <div class="container__main">
        <div class="footer__col">
            <div class="col col1">
                <a href=""><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/logo.svg" alt=""></a>
                <p class="col1__text">Бронирование номеров в лучшем отеле 2019 года по версии ассоциации «Отельные взгляды»</p>
            </div>
            <div class="col col2">
                <h5 class="title">Навигация</h5>
                <a href="#" class="footer__col--link">О нас</a>
                <a href="#" class="footer__col--link">Новости</a>
                <a href="#" class="footer__col--link">Служба поддержки</a>
                <a href="#" class="footer__col--link">Услуги</a>
            </div>
            <div class="col col3">
                <h5 class="title">О нас</h5>
                <a href="#" class="footer__col--link">О сервисе</a>
                <a href="#" class="footer__col--link">Наша команда</a>
                <a href="#" class="footer__col--link">Вакансии</a>
                <a href="#" class="footer__col--link">Инвесторы</a>
            </div>
            <div class="col col4">
                <h5 class="title">Служба поддержки</h5>
                <a href="#" class="footer__col--link">Соглашения</a>
                <a href="#" class="footer__col--link">Сообщества</a>
                <a href="#" class="footer__col--link">Связь с нами</a>
            </div>
            <div class="col col5">
                <h5 class="title">Подписка</h5>
                <p class="col5__text">Получайте специальные предложения и новости сервиса</p>
                <form class="col5__input">
                    <input type="email" class="col5__input--email" placeholder="Email">
                    <button type="submit" class="col5__input--submit"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow_right.svg" alt=""></button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <div class="copyright">
        <div class="container__main copyright__block">
            <div>
                <span class="copyright__text">Copyright © 2018-<?= date("Y"); ?> Toxin отель. Все права зачищены.</span>
            </div>
        </div>
    </div>
</footer>
<!-- /.footer -->

<? wp_footer(); ?>

</body>
</html>