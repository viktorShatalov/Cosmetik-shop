<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>
<!-- main -->
<main>
    <!-- first slider -->
    <section id="first__slider">
        <div class="m-auto">
            <div class="first__slider">
				<?php $slider_top = carbon_get_theme_option( 'slider_top' );
				foreach ( $slider_top as $slide ):
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
				<?php
				$translations = pll_the_languages( array( 'raw' => 1 ) );
				if ( $translations['ru']['current_lang'] == 1 ) {
					$child_id = 88;
				} else {
					$child_id = 90;
				}
				$categories = get_terms( [
					'taxonomy'   => 'product_cat',
					'hide_empty' => false,
					'child_of'   => $child_id,
				] );
				foreach ($categories as $category):
					$meta = get_term_meta( $category->term_id, 'thumbnail_id', true );
					$url    = wp_get_attachment_url( $meta );
					?>
                    <div class="slider__brands-item">
                        <a href="<?php echo get_category_link( $category->term_id ) ?>">
                            <img data-lazy="<?php echo $url ?>"></a>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Category ptoduct -->
    <section id="category__product">
        <div class="conteiner m-auto">
            <div class="category__product-content ">
				<?php if ( $translations['ru']['current_lang'] == 1 ): ?>
                <div class="category__items">
                    <div class="category__slider">
                        <a href="/product-category/parfrum/aromaty-dlja-nejo/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-1.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>Ароматы</h3>
                                    <p>для нее</p>
                                </div>
                            </div>
                        </a>
                        <a href="/product-category/parfrum/aromaty-dlja-nego/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-2.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>Ароматы</h3>
                                    <p>для него</p>
                                </div>
                            </div>
                        </a>
                        <a href="/product-category/parfrum/nishevaja-parfjumerija/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-3.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>нишевая</h3>
                                    <p>парфюмерия</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category__slider-second">
                        <a href="/product-category/sredstva-po-uhodu-za-kozhej/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-4.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>средства</h3>
                                    <p>по уходу за кожей</p>
                                </div>
                            </div>
                        </a>
                        <a href="/product-category/makiag/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-5.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>косметика</h3>
                                    <p>декоративная</p>
                                </div>
                            </div>
                        </a>
                        <a href="/product-category/podarochnye-karty/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-6.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>подарочные</h3>
                                    <p>карты</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php else: ?>
                <div class="category__items">
                    <div class="category__slider">
                        <a href="/uk/product-category/parf/aromati-dlja-nei/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-1.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>Аромати</h3>
                                    <p>для неї</p>
                                </div>
                            </div>
                        </a>
                        <a href="/uk/product-category/parf/aromati-dlja-nogo/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-2.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>Аромати</h3>
                                    <p>для нього</p>
                                </div>
                            </div>
                        </a>
                        <a href="/uk/product-category/parf/nisheva-parfumerija/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-3.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>Нішева</h3>
                                    <p>парфумерія</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category__slider-second">
                        <a href="/uk/product-category/zasobi-po-dogljadu-za-shkiroju/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-4.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>Засоби</h3>
                                    <p>по догляду за шкірою</p>
                                </div>
                            </div>
                        </a>
                        <a href="/uk/product-category/mak/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-5.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>Косметика</h3>
                                    <p>декоративна</p>
                                </div>
                            </div>
                        </a>
                        <a href="/uk/product-category/pod-kart/">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/category/category_item-6.png"
                                     alt="Категории товаров">
                                <div class="category__description">
                                    <h3>Подарункові</h3>
                                    <p>карти</p>
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
                <a href="#">
                    <div class="new__product-card">
              <span class="new-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/new.png" alt="Новинки-иконка">
              </span>
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/25371.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="new__product-card">
              <span class="new-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/new.png" alt="Новинки-иконка">
              </span>
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/47462.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="new__product-card">
              <span class="new-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/new.png" alt="Новинки-иконка">
              </span>
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/perfume_PNG10271.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="new__product-card">
              <span class="new-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/new.png" alt="Новинки-иконка">
              </span>
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/perfume_PNG10277.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="new__product-card">
              <span class="new-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/new.png" alt="Новинки-иконка">
              </span>
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/25371.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="new__product-card">
              <span class="new-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/new.png" alt="Новинки-иконка">
              </span>
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/25371.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- best product -->
    <section id="best__product">
        <div class="conteiner m-auto">
            <h2>Бестселеры</h2>
            <div class="best__product-slider">
                <a href="#">
                    <div class="best__product-card">
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/25371.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="best__product-card">
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/47462.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="best__product-card">
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/perfume_PNG10271.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="best__product-card">
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/perfume_PNG10277.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="best__product-card">
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/25371.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="best__product-card">
                        <div class="card__img">
                            <img data-lazy="<?php echo get_template_directory_uri() ?>/assets/img/product/25371.jpg"
                                 alt="Новинки">
                        </div>
                        <div class="card__name">
                            <h3>
                                <span>Givenchy</span><br> Духи женские “Название духов”
                            </h3>
                        </div>
                        <div class="card__footer">
                            <div class="prices">
                                <div class="strikeout__price">
                                    <p><span>125 000</span>руб.</p>
                                </div>
                                <div class="current__price">
                                    <p><span>25 000</span>руб.</p>
                                </div>
                            </div>
                            <div class="addToCart">
                                <button type="submit" name="add__cart-btn" class="addCart__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png"
                                         alt="Купить товар на дом">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- last slider -->
    <section id="last__slider">
        <div class="conteiner m-auto">
            <div class="last__slider">
				<?php $slider_down = carbon_get_theme_option( 'slider_down' );
				foreach ( $slider_down as $slide ):
					?>
                    <div class="slider__item">
                        <img data-lazy="<?php echo $slide['slide'] ?>">
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
        <div class="link__sale">
	        <?php if ( $translations['ru']['current_lang'] == 1 ): ?>
            <a href="/akcii/">Ознакомиться с акциями</a>
            <?php else: ?>
            <a href="/uk/akcii-2/">Ознайомитися з акціями</a>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
