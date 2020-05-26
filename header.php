<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>
<!-- preloader -->
<!-- <div id="preloader">
  <div class="loader_line"></div>
</div> -->

<!-- header -->
<?php $translations = pll_the_languages(array('raw' => 1));
//pr($translations);
?>

<body class="customize-support">
    <!-- autorithation-modal -->
    <div id="autorithation-modal" class="uk-modal">
        <div class="uk-modal-dialog">
            <a class="uk-modal-close uk-close"></a>
            <div class="modal-body__autorithation">
                <h2>Вход в личный кабинет</h2>
            </div>
        </div>
    </div>
    <header id="header">
        <div class="mobile__content">
            <a class="category__link" href="#">Каталог</a>
            <div class="mobile__content-description">
                <div class="contacts__phone">
                    <a href="tel:0 (800) 50 77 40">0 (800) 50 77 40</a>
                    <p>
                        с 9:00 до 22:00<br>
                        ежедневно
                    </p>
                </div>
            </div>
            <div class="close-menu">
                <p>Закрыть меню</p>
            </div>
        </div>
        <div class="top__row">
            <div class="conteiner m-auto">
                <div class="social">

                    <p><?php if ($translations['ru']['current_lang'] == 1) {
                            echo 'Присоединяйтесь к нам:';
                        } else {
                            echo 'Приєднуйтесь до нас:';
                        }
                        ?> </p>
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
                <div class="change__lang">
                    <p> <?php if ($translations['ru']['current_lang'] == 1) {
                            echo 'Выберите язык:';
                        } else {
                            echo 'Виберіть мову:';
                        }
                        ?></p>
                    <ul>
                        <li><a <?php if ($translations['ru']['current_lang'] == 1) : ?>class="active" <?php endif; ?> href="<?php echo $translations['ru']['url'] ?>">Рус.</a></li>
                        <li><a <?php if ($translations['uk']['current_lang'] == 1) : ?>class="active" <?php endif; ?> href="<?php echo $translations['uk']['url'] ?>">Укр.</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom__row">
            <div class="conteiner m-auto">
                <div class="bottom__row-top">
                    <div class="logo">
                        <?php if ($translations['ru']['current_lang'] == 1) : ?>
                            <a href="/">
                            <?php else : ?>
                                <a href="/uk/home/">
                                <?php endif; ?>
                                <img src="<?php echo carbon_get_theme_option('logo') ?>" alt="FaceCare">
                                </a>
                                <div class="burger"><span></span></div>
                    </div>
                    <div class="top__box">
                        <div class="contacts__phone">
                            <a href="tel:<?php echo carbon_get_theme_option('phone') ?>"><?php echo carbon_get_theme_option('phone') ?></a>
                        </div>
                        <div class="cabinet">
                            <a href="#autorithation-modal" data-uk-modal><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/social.png" alt="personal icon"></a>
                            <span class="dropdown__btn"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/arrows_accaunt.png" alt="icon"></span>
                            <div class="cabinet__dropdown">
                                <p>Существующий пользователь</p>
                                <form>
                                    <input type="text" placeholder="Телефон или e-mail">
                                    <input type="password" placeholder="Пароль">
                                    <input type="submit" value="Войти">
                                    <a href="#">Восcтановить пароль</a>
                                    <a href="#">Зарегистрироваться</a>
                                </form>
                            </div>
                        </div>
                        <div id="cart" class="cart"><a href="#cart-modal" data-uk-modal>
                                <button class="cart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png" alt="cart">
                                    <span class="basket-btn__counter"><?php
                                                                        global $woocommerce;
                                                                        sprintf($woocommerce->cart->cart_contents_count) ?></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bottom__row-down">
                    <div class="catalog__menu">
                        <a class="category__link" href="#"><?php if ($translations['ru']['current_lang'] == 1) {
                                                                echo 'Каталог товаров';
                                                            } else {
                                                                echo 'Каталог товарів';
                                                            }
                                                            ?></a>
                        <div class="category">
                            <div class="category__box-menu">
                                <ul class="category__menu-items">
                                    <?php $categories = get_terms([
                                        'taxonomy'   => 'product_cat',
                                        'hide_empty' => false,
                                        'parent'     => 0,
                                        'orderby'    => 'id',
                                        'exclude'    => '90, 88'
                                    ]);
                                    //pr($categories);
                                    $i = 0;
                                    foreach ($categories as $category) :
                                        $i++;
                                        //									$meta = get_term_meta( $category->term_id, 'thumbnail_id', true );
                                        //									$url  = wp_get_attachment_url( $meta );
                                    ?>
                                        <li data-filter=".item<?php echo $i ?>"><a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a>
                                        </li>
                                    <?php
                                    endforeach; ?>
                                </ul>
                                <div class="box__sub-menu">
                                    <?php
                                    $i = 0;
                                    foreach ($categories as $category) :
                                        $i++; ?>
                                        <div class="category__sub-menu item<?php echo $i ?>">
                                            <h3>
                                                <?php echo $category->name ?>
                                            </h3>
                                            <ul>
                                                <?php $cat_child = get_terms([
                                                    'taxonomy'   => 'product_cat',
                                                    'hide_empty' => false,
                                                    'child_of'   => $category->term_id,
                                                ]);
                                                foreach ($cat_child as $cat) : ?>
                                                    <li>
                                                        <a href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="menu__items">
                        <ul>
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'header',
                                'container'      => false,        // Убираем контейнер у меню, можно добавить свой
                                'items_wrap'     => '%3$s', // Убираем обёртку <ul>
                                'menu_class'     => '',
                            ]); ?>
                        </ul>
                    </nav>
                    <div class="search">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
    </header>