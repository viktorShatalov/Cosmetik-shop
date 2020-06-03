<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>
<!-- main -->
<main>
    <!-- preloader -->
    <div id="preloader">
        <div class="loader_line">
        </div>
    </div>
    <!-- first slider -->
    <section id="first__slider">
        <div class="m-auto">
            <div class="first__slider">
                <?php
                if (get_locale() != 'uk') {
                    $slider_top = carbon_get_theme_option('slider_top');
                } else {
                    $slider_top = carbon_get_theme_option('slider_top_ua');
                }
                foreach ($slider_top as $slide) :
                ?>
                    <div class="slider__item">
                        <img data-lazy="<?php echo $slide['slide'] ?>" alt="Морская косметика из франции">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- brands -->
    <section id="brands">
        <div class="conteiner m-auto">
            <div class="slider__brands">
                <?php $brands = carbon_get_theme_option('brands'); 
                		foreach ($brands as $brand):
                ?>
                    <div class="slider__brands-item">
                        <a href="<?php echo $brand['url'] ?>">
                            <img data-lazy="<?php echo $brand['slide'] ?>" alt="<?php echo $brand['name'] ?>"></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Category ptoduct -->
    <section id="category__product">
        <div class="conteiner m-auto">
            <div class="category__product-content ">
                <?php if (get_locale() != 'uk'):
                	$cat_with_img = carbon_get_theme_option('category_with_img');
                 ?>
                    <div class="category__items">
                        <div class="category__slider">
                            <a href="<?php echo $cat_with_img[0]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img[0]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img[0]['header'] ?>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $cat_with_img[1]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img[1]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img[1]['header'] ?>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $cat_with_img[2]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img[2]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img[2]['header'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="category__slider-second">
                            <a href="<?php echo $cat_with_img[3]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img[3]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img[3]['header'] ?>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $cat_with_img[4]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img[4]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img[4]['header'] ?>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $cat_with_img[5]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img[5]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img[5]['header'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php else :
						$cat_with_img_ua = carbon_get_theme_option('category_with_img_ua');
                 ?>
                    <div class="category__items">
                        <div class="category__slider">
                            <a href="<?php echo $cat_with_img_ua[0]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img_ua[0]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img_ua[0]['header'] ?>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $cat_with_img_ua[1]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img_ua[1]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img_ua[1]['header'] ?>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $cat_with_img_ua[2]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img_ua[2]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img_ua[2]['header'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="category__slider-second">
                            <a href="<?php echo $cat_with_img_ua[3]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img_ua[3]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img_ua[3]['header'] ?>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $cat_with_img_ua[4]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img_ua[4]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img_ua[4]['header'] ?>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $cat_with_img_ua[5]['url'] ?>">
                                <div class="item">
                                    <img src="<?php echo $cat_with_img_ua[5]['slide'] ?>" alt="Категории товаров">
                                    <div class="category__description">
                                        <?php echo $cat_with_img_ua[5]['header'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- new product -->
    <section id="new__product">
        <div class="conteiner m-auto">
            <h2>Новинки</h2>
            <div class="new__product-slider">
                <?php
                $args = array(
                    'post_type'      => 'product',
                    'orderby'        => array('meta_value' => 'ASC', 'date' => 'DESC'),
                    'posts_per_page' => 6,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) :
                    $loop->the_post();
                    global $product;
                ?>
                    <a href="<?php echo get_permalink($product->get_id()) ?>">
                        <div class="new__product-card">
                            <span class="new-icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/new.png" alt="Новинки-иконка">
                            </span>
                            <div class="card__img">
                                <img data-lazy="<?php
                                                $img_id  = get_post_thumbnail_id();
                                                $img_url = wp_get_attachment_url($img_id);
                                                echo $img_url;
                                                ?>" alt="Новинки">
                            </div>
                            <div class="card__name">
                                <h3>
                                    <span><?php
                                            $categories = $product->get_category_ids();
                                            foreach ($categories as $cat) {
                                                $cat    = get_term($cat, 'product_cat');
                                                $parent = $cat->parent;
                                                if ($parent == 88 || $parent == 90) {
                                                    echo $cat->name;
                                                }
                                            }
                                            ?></span><br> <?php echo $product->get_name(); ?>
                                </h3>
                            </div>
                            <div class="card__footer">
                                <div class="prices">
                                    <div class="strikeout__price">
                                        <p><span><?php
                                                    $price_reg = $product->get_regular_price();
                                                    echo number_format($price_reg, '0', '', ' ');
                                                    ?></span> &#8372;</p>
                                    </div>
                                    <div class="current__price">
                                        <p><span><?php
                                                    $price = $product->get_price();
                                                    echo number_format($price, '0', '', ' ');
                                                    ?></span> &#8372;</p>
                                    </div>
                                </div>
                                <div class="addToCart">
                                    <?php woocommerce_template_loop_add_to_cart() ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- best product -->
    <section id="best__product">
        <div class="conteiner m-auto">
            <h2>Бестселеры</h2>
            <div class="best__product-slider">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 6,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_visibility',
                            'field'    => 'name',
                            'terms'    => 'featured',
                        ),
                    ),
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) :
                    $loop->the_post();
                    global $product;
                ?>
                    <a href="<?php echo get_permalink($product->get_id()) ?>">
                        <div class="best__product-card">
                            <div class="card__img">
                                <img data-lazy="<?php
                                                $img_id  = get_post_thumbnail_id();
                                                $img_url = wp_get_attachment_url($img_id);
                                                echo $img_url;
                                                ?>" alt="Новинки">
                            </div>
                            <div class="card__name">
                                <h3>
                                    <span><?php
                                            $categories = $product->get_category_ids();
                                            foreach ($categories as $cat) {
                                                $cat    = get_term($cat, 'product_cat');
                                                $parent = $cat->parent;
                                                if ($parent == 88 || $parent == 90) {
                                                    echo $cat->name;
                                                }
                                            }
                                            ?></span><br> <?php echo $product->get_name(); ?>
                                </h3>
                            </div>
                            <div class="card__footer">
                                <div class="prices">
                                    <div class="strikeout__price">
                                        <p><span><?php
                                                    $price_reg = $product->get_regular_price();
                                                    echo number_format($price_reg, '0', '', ' ');
                                                    ?></span> &#8372;</p>
                                    </div>
                                    <div class="current__price">
                                        <p><span><?php
                                                    $price = $product->get_price();
                                                    echo number_format($price, '0', '', ' ');
                                                    ?></span> &#8372;</p>
                                    </div>
                                </div>
                                <div class="addToCart">
                                    <?php woocommerce_template_loop_add_to_cart() ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- last slider -->
    <section id="last__slider">
        <div class="conteiner m-auto">
            <div class="last__slider">
                <?php
                if (get_locale() != 'uk') {
                    $slider_down = carbon_get_theme_option('slider_down');
                } else {
                    $slider_down = carbon_get_theme_option('slider_down_ua');
                }
                foreach ($slider_down as $slide) :
                ?>
                    <div class="slider__item">
                        <img data-lazy="<?php echo $slide['slide'] ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="link__sale">
            <?php if (get_locale() != 'uk'): ?>
                <a href="/akcii/">Ознакомиться с акциями</a>
            <?php else : ?>
                <a href="/uk/akcii-2/">Ознайомитися з акціями</a>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>