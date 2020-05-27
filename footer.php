<?php $translations = pll_the_languages(array('raw' => 1)); ?>
<footer id="footer">
    <div class="conteiner m-auto">
        <div class="logo">
            <a href="/">
                <img src="<?php echo carbon_get_theme_option('logo_footer') ?>" alt="FaceCare">
            </a>
        </div>
        <div class="footer__content">
            <nav class="footer__nav">
                <ul>
                    <h4>Про нас</h4>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'pro_nas',
                        'container'      => false,        // Убираем контейнер у меню, можно добавить свой
                        'items_wrap'     => '%3$s', // Убираем обёртку <ul>
                        'menu_class'     => '',
                    ]); ?>
                </ul>
                <ul>
                    <h4>Помощь</h4>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'help',
                        'container'      => false,        // Убираем контейнер у меню, можно добавить свой
                        'items_wrap'     => '%3$s', // Убираем обёртку <ul>
                        'menu_class'     => '',
                    ]); ?>
                </ul>
                <ul>
                    <h4>Для вас</h4>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'dlja_vas',
                        'container'      => false,        // Убираем контейнер у меню, можно добавить свой
                        'items_wrap'     => '%3$s', // Убираем обёртку <ul>
                        'menu_class'     => '',
                    ]); ?>
                </ul>
            </nav>
            <div class="footer__contacts">
                <div class="phone">
                    <?php if ($translations['ru']['current_lang'] == 1) : ?>
                        <h4>Гарячая линия:</h4>
                    <?php else : ?>
                        <h4>Гаряча лінія:</h4>
                    <?php endif; ?>
                    <a href="tel:<?php echo carbon_get_theme_option('phone') ?>"><?php echo carbon_get_theme_option('phone') ?></a>
                </div>
                <div class="operating__mode">
                    <p><?php if ($translations['ru']['current_lang'] == 1) : ?>Ежедневно<?php else : ?>Щодня<?php endif; ?> с <?php echo carbon_get_theme_option('on') ?>
                        до <?php echo carbon_get_theme_option('off') ?></p>
                </div>
                <div class="social">
                    <?php if ($translations['ru']['current_lang'] == 1) : ?>
                        <p>Присоединяйтесь к нам: </p>
                    <?php else : ?>
                        <p>Приєднуйтесь до нас: </p>
                    <?php endif; ?>
                    <span>
                        <ul>
                            <li>
                                <a href="<?php echo carbon_get_theme_option('facebook') ?>"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option('insta') ?>"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option('odn') ?>"><i class="fab fa-odnoklassniki"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option('twit') ?>"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option('vk') ?>"><i class="fab fa-vk"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option('youtube') ?>"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer__signature conteiner m-auto">
    <p>
        © FaceCare, <?php echo date('Y') ?>, Все права защищены
    </p>
</div>
<?php wp_footer(); ?>

<!-- cart-modal -->
<div id="cart-modal" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="modal-body">
            <?php woocommerce_mini_cart(); ?>
        </div>
    </div>
</div>
<!-- autorithation-modal -->
<div id="autorithation-modal" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="modal-body_autorithation">
            <h2>Вход в личный кабинет</h2>
            <div class="content">
                <div class="left">
                    <form>
                        <legend>Существующий пользователь</legend>
                        <input type="text" placeholder="Номер телефона или e-mail">
                        <input type="password" placeholder="Пароль">
                        <div class="left__form-footer">
                            <input type="submit" value="Войти">
                            <p>Если вы забыли пароль то перейдите по ссылке
                                <a href="#">восcтановить пароль</a></p>
                        </div>
                    </form>
                </div>
                <div class="right">
                    <h4>Зарегистрироваться на сайте</h4>
                    <p>
                        Создание аккаунта имеет ряд преимуществ: быстрые покупки, возможность сохранить более одного адреса
                        доставки, отслеживание заказов и многое другое.
                    </p>
                    <a href="#">Зарегистрироваться</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- call-order -->
<div id="call-order" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="modal-body_autorithation">
            Заказать звонок
        </div>
    </div>
</div>
</body>

</html>