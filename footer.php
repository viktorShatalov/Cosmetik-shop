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
	        <?php if (get_locale() != 'uk'): ?>
                <h2>Вход в личный кабинет</h2>
	        <?php else: ?>
                <h2>Вхід в особистий кабінет</h2>
	        <?php endif; ?>
            <div class="content">
                <div class="left">
                    <?php do_action( 'woocommerce_before_customer_login_form' ); ?>
                    <form class="woocommerce-form woocommerce-form-login login" method="post">
	                    <?php if (get_locale() != 'uk'): ?>
                            <legend>Существующий пользователь</legend>
	                    <?php else: ?>
                            <legend>Iснуючий користувач</legend>
	                    <?php endif; ?>
	                    <?php do_action( 'woocommerce_login_form_start' ); ?>
                        <input placeholder="<?php if (get_locale() != 'uk'): ?>Номер телефона или e-mail<?php else: ?>Номер телефону або e-mail <?php endif; ?>" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
<!--                        <input type="text" placeholder="Номер телефона или e-mail">-->
                        <input placeholder="Пароль" class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
<!--                        <input type="password" placeholder="Пароль">-->
	                    <?php do_action( 'woocommerce_login_form' ); ?>
                        <div class="left__form-footer">
<!--                            <input type="submit" value="Войти">-->
	                        <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                            <style>
                                .woocommerce-button.button.woocommerce-form-login__submit{
                                    padding: 12px 13px;
                                    width: 100%;
                                    margin-top: 20px;
                                    margin-bottom: 0;
                                    background-color: #404040;
                                    text-align: center;
                                    color: white;
                                    font-family: "Montserrat-Medium";
                                    font-size: 1em;
                                    text-transform: uppercase;
                                    cursor: pointer;
                                    border-radius: 10px;
                                    -webkit-transition: all 0.3s ease-in-out;
                                    transition: all 0.3s ease-in-out;
                                    max-width: 180px;
                                    margin-top: 0;
                                }
                            </style>
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
	                        <?php if (get_locale() != 'uk'): ?>
                                <p>Если вы забыли пароль то перейдите по ссылке
                                    <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">восcтановить пароль</a></p>
	                        <?php else: ?>
                                <p>Якщо ви забули пароль то перейдіть за посиланням
                                    <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">восcтановіть пароль</a></p>
	                        <?php endif; ?>
                        </div>
	                    <?php do_action( 'woocommerce_login_form_end' ); ?>
                    </form>
                    <?php
                    if (isset($_POST['username']) && $_POST['password']) {
	                    $username = $_POST['username'];
	                    $password = $_POST['password'];
	                    $auth     = wp_authenticate( $username, $password );
	                    if ( is_wp_error( $auth ) ) {
		                    echo '<script>alert("Ошибка авторизации!");</script>';
	                    }
                    }
                    ?>
                </div>
	            <?php if (get_locale() != 'uk'): ?>
                    <div class="right">
                        <h4>Зарегистрироваться на сайте</h4>
                        <p>
                            Создание аккаунта имеет ряд преимуществ: быстрые покупки, возможность сохранить более одного адреса
                            доставки, отслеживание заказов и многое другое.
                        </p>
                        <a href="/ru/registracija/">Зарегистрироваться</a>
                    </div>
	            <?php else: ?>
                    <div class="right">
                        <h4>Зареєструватися на сайті</h4>
                        <p>
                            Створення облікового запису має ряд переваг: швидкі покупки, можливість зберегти більше однієї
                            адреси доставки, відстеження замовлень і багато іншого.
                        </p>
                        <a href="/uk/reiestracija/">Зареєструватися</a>
                    </div>
	            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</body>

</html>