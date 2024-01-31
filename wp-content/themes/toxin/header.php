<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toxin - Бронирование номеров</title>

    <? wp_head(); ?>

</head>
<body>

<header class="header">
    <div class="container__main">
        <div class="menu">
            <a href="<? bloginfo('url'); ?>" id="logo" class="menu__logo"><img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/icons/logo.svg" alt=""></a>

            <div class="menu_block">
                <? wp_nav_menu(array(
                    'theme_location' => 'top',
                    'container' => null,
                    'menu_class' => 'nav',
                    'menu_id' => 'nav',
                )); ?>

                <div class="buttons">
                    <a href="" class="button button__login">Войти</a>
                    <a href="" class="button button__reg">Зарегестрироваться</a>
                </div>
            </div>
            <!-- /.nav -->
        </div>
        <!-- /.menu -->
    </div>
    <!-- /.container -->
</header>
<!-- /.header -->