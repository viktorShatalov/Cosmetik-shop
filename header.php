<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<?php $translations = pll_the_languages( array( 'raw' => 1 ) );
//pr($translations);
?>

<body class="customize-support">
<header id="header">
    <div class="mobile__content">
        <div class="row conteiner">
            <div class="burger"><span></span></div>
            <div class="row__link">
                <div class="top__box">
                    <div class="mobile__cabinet">
						<?php
                        if ( is_user_logged_in() ):
                            ?>
                            <a href="<?php if (get_locale() != 'uk') {
	                            echo '/ru/my - account /';
                            } else {
                                echo '/uk/mij-akkaunt/';
                            }
                                    ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/social.png" alt="personal icon"></a>
						<?php else: ?>
                            <a href="#autorithation-modal" data-uk-modal><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/icon/social.png"
                                        alt="personal icon"></a>
						<?php endif; ?>
	                    <?php if (!is_user_logged_in()): ?>
                            <span class="dropdown__btn"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/icon/arrows_accaunt.png"
                                        alt="icon"></span>
	                    <?php endif; ?>
                        <div class="cabinet">
		                    <?php
		                    if ( is_user_logged_in() ):
			                    ?>
                                <a href="<?php if (get_locale() != 'uk') {
				                    echo '/ru/my - account /';
			                    } else {
				                    echo '/uk/mij-akkaunt/';
			                    }
			                    ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/social.png" alt="personal icon"></a>
		                    <?php else: ?>
                                <a href="#autorithation-modal" data-uk-modal><img
                                            src="<?php echo get_template_directory_uri() ?>/assets/img/icon/social.png"
                                            alt="personal icon"></a>
		                    <?php endif; ?>
                            <span class="dropdown__btn"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/icon/arrows_accaunt.png"
                                        alt="icon"></span>
		                    <?php if (is_user_logged_in()): ?>
                                <div class="cabinet__dropdown">
                                    <p><?php
					                    $current_user = wp_get_current_user();
					                    echo $current_user->display_name;?></p>
                                    <form>
                                        <a href="<?php echo wp_logout_url(home_url()); ?>" title="Выход">Выход</a>
                                    </form>
                                </div>
		                    <?php else: ?>
                                <div class="cabinet__dropdown">
				                    <?php if (get_locale() != 'uk'): ?>
                                        <p>Существующий пользователь</p>
				                    <?php else: ?>
                                        <p>Існуючий користувач</p>
				                    <?php endif; ?>

				                    <?php do_action( 'woocommerce_before_customer_login_form' ); ?>
                                    <form class="woocommerce-form woocommerce-form-login login" method="post">
					                    <?php do_action( 'woocommerce_login_form_start' ); ?>
                                        <input placeholder="<?php if (get_locale() != 'uk'): ?>Номер телефона или e-mail<?php else: ?>Номер телефону або e-mail <?php endif; ?>" type="text"
                                               class="woocommerce-Input woocommerce-Input--text input-text" name="username"
                                               id="username" autocomplete="username"
                                               value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                        <input placeholder="Пароль" class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
					                    <?php do_action( 'woocommerce_login_form' ); ?>
					                    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
                                        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php if (get_locale() != 'uk'): ?>
                                                Восcтановить пароль
						                    <?php else: ?>
                                                Восcтановіть пароль
						                    <?php endif; ?></a>
					                    <?php if (get_locale() != 'uk'): ?>
                                            <a href="/ru/registracija/">Зарегистрироваться</a>
					                    <?php else: ?>
                                            <a href="/uk/reiestracija/">Зареєструватися</a>
					                    <?php endif; ?>
					                    <?php do_action( 'woocommerce_login_form_end' ); ?>
                                    </form>
                                </div>
		                    <?php endif; ?>

                        </div>
                    </div>
                    <div class="contacts__phone">
                        <a href="tel:0 (800) 50 77 40"><img
                                    src="<?php echo get_template_directory_uri() ?>/assets/img/icon/technology.png"
                                    alt="mobile-phone"></a>
                    </div>
                    <div id="cart" class="cart">
                        <a href="#cart-modal" data-uk-modal>
                            <button class="cart__btn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                     alt="cart">
                                <span class="basket-btn__counter">29</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top__row">
        <div class="conteiner m-auto">
            <div class="social">

                <p><?php if ( $translations['ru']['current_lang'] == 1 ) {
						echo 'Присоединяйтесь к нам:';
					} else {
						echo 'Приєднуйтесь до нас:';
					}
					?> </p>
                <span>
                        <ul>
                            <li>
                                <a href="<?php echo carbon_get_theme_option( 'facebook' ) ?>"><i
                                            class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option( 'insta' ) ?>"><i
                                            class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option( 'odn' ) ?>"><i
                                            class="fab fa-odnoklassniki"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option( 'twit' ) ?>"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option( 'vk' ) ?>"><i class="fab fa-vk"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo carbon_get_theme_option( 'youtube' ) ?>"><i
                                            class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </span>
            </div>
            <div class="change__lang">
                <p> <?php if ( $translations['ru']['current_lang'] == 1 ) {
						echo '<span class="mobile__hide">Выберите</span> язык:';
					} else {
						echo '<span class="mobile__hide">Виберіть</span> мову:';
					}
					?></p>
                <ul>
                    <li><a <?php if ( $translations['ru']['current_lang'] == 1 ) : ?>class="active" <?php endif; ?>
                           href="<?php echo $translations['ru']['url'] ?>">Рус.</a></li>
                    <li><a <?php if ( $translations['uk']['current_lang'] == 1 ) : ?>class="active" <?php endif; ?>
                           href="<?php echo $translations['uk']['url'] ?>">Укр.</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom__row">
        <div class="conteiner m-auto">
            <div class="mobile__search mobile__content">
	            <?php get_search_form(); ?>
            </div>
            <div class="bottom__row-top">
                <div class="logo">
					<?php if ( $translations['ru']['current_lang'] == 1 ) : ?>
                    <a href="/">
						<?php else : ?>
                        <a href="/uk/home/">
							<?php endif; ?>
                            <img src="<?php echo carbon_get_theme_option( 'logo' ) ?>" alt="FaceCare">
                        </a>
                </div>
                <div class="top__box">
                    <div class="contacts__phone">
                        <a href="tel:<?php echo carbon_get_theme_option( 'phone' ) ?>"><?php echo carbon_get_theme_option( 'phone' ) ?></a>
                    </div>
                    <div class="cabinet">
	                    <?php
	                    if ( is_user_logged_in() ):
		                    ?>
                            <a href="<?php if (get_locale() != 'uk') {
			                    echo '/ru/my - account /';
		                    } else {
			                    echo '/uk/mij-akkaunt/';
		                    }
		                    ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/social.png" alt="personal icon"></a>
	                    <?php else: ?>
                            <a href="#autorithation-modal" data-uk-modal><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/icon/social.png"
                                        alt="personal icon"></a>
	                    <?php endif; ?>
                        <span class="dropdown__btn"><img
                                    src="<?php echo get_template_directory_uri() ?>/assets/img/icon/arrows_accaunt.png"
                                    alt="icon"></span>
                        <?php if (is_user_logged_in()): ?>
                            <div class="cabinet__dropdown">
                                <p><?php
	                                $current_user = wp_get_current_user();
                                    echo $current_user->display_name;?></p>
                                <form>
                                    <a href="<?php echo wp_logout_url(home_url()); ?>" title="Выход">Выход</a>
                                </form>
                            </div>
                        <?php else: ?>
                            <div class="cabinet__dropdown">
	                            <?php if (get_locale() != 'uk'): ?>
                                    <p>Существующий пользователь</p>
	                            <?php else: ?>
                                    <p>Існуючий користувач</p>
	                            <?php endif; ?>

	                            <?php do_action( 'woocommerce_before_customer_login_form' ); ?>
                                <form class="woocommerce-form woocommerce-form-login login" method="post">
	                                <?php do_action( 'woocommerce_login_form_start' ); ?>
                                    <input placeholder="<?php if (get_locale() != 'uk'): ?>Номер телефона или e-mail<?php else: ?>Номер телефону або e-mail <?php endif; ?>" type="text"
                                           class="woocommerce-Input woocommerce-Input--text input-text" name="username"
                                           id="username" autocomplete="username"
                                           value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                                    <input placeholder="Пароль" class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
	                                <?php do_action( 'woocommerce_login_form' ); ?>
	                                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
                                    <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php if (get_locale() != 'uk'): ?>
                                            Восcтановить пароль
	                                    <?php else: ?>
                                            Восcтановіть пароль
	                                    <?php endif; ?></a>
                                    <?php if (get_locale() != 'uk'): ?>
                                    <a href="/ru/registracija/">Зарегистрироваться</a>
                                    <?php else: ?>
                                        <a href="/uk/reiestracija/">Зареєструватися</a>
                                    <?php endif; ?>
	                                <?php do_action( 'woocommerce_login_form_end' ); ?>
                                </form>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div id="cart" class="cart"><a href="#cart-modal" data-uk-modal>
                            <button class="cart__btn">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                     alt="cart">
                                <span class="basket-btn__counter"><?php
									global $woocommerce;
									sprintf( $woocommerce->cart->cart_contents_count ) ?></span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bottom__row-down">
                <div class="catalog__menu">
                    <a class="category__link" href="#"><?php if ( $translations['ru']['current_lang'] == 1 ) {
							echo 'Каталог товаров';
						} else {
							echo 'Каталог товарів';
						}
						?></a>
                    <div class="category">
                        <div class="category__box-menu">
                            <ul class="category__menu-items">
								<?php $categories = get_terms( [
									'taxonomy'   => 'product_cat',
									'hide_empty' => false,
									'parent'     => 0,
									'orderby'    => 'id',
									'exclude'    => '90, 88'
								] );
								//pr($categories);
								$i = 0;
								foreach ( $categories as $category ) :
									$i ++;
									//									$meta = get_term_meta( $category->term_id, 'thumbnail_id', true );
									//									$url  = wp_get_attachment_url( $meta );
									?>
                                    <li data-filter=".item<?php echo $i ?>"><a
                                                href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name ?></a>
                                    </li>
								<?php
								endforeach; ?>
                            </ul>
                            <div class="box__sub-menu">
								<?php
								$i = 0;
								foreach ( $categories as $category ) :
									$i ++; ?>
                                    <div class="category__sub-menu item<?php echo $i ?>">
                                        <h3>
											<?php echo $category->name ?>
                                        </h3>
                                        <ul>
											<?php $cat_child = get_terms( [
												'taxonomy'   => 'product_cat',
												'hide_empty' => false,
												'child_of'   => $category->term_id,
											] );
											foreach ( $cat_child as $cat ) : ?>
                                                <li>
                                                    <a href="<?php echo get_category_link( $cat->term_id ) ?>"><?php echo $cat->name ?></a>
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
						wp_nav_menu( [
							'theme_location' => 'header',
							'container'      => false,        // Убираем контейнер у меню, можно добавить свой
							'items_wrap'     => '%3$s', // Убираем обёртку <ul>
							'menu_class'     => '',
						] ); ?>
                    </ul>
                </nav>
                <div class="search">
					<?php get_search_form(); ?>
                </div>
            </div>
        </div>
</header>