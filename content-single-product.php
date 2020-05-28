<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.

	return;
}
?>
<div class="about__product">
	<div class="mobile__content">
		<div class="product__name">
			<span class="brand"><?php
								$categories = $product->get_category_ids();
								foreach ($categories as $cat) {
									$cat    = get_term($cat, 'product_cat');
									$parent = $cat->parent;
									if ($parent == 88 || $parent == 90) {
										echo $cat->name;
									}
								}
								?></span>
			<h1>
				<?php echo $product->get_name(); ?>
			</h1>
			<div class="article">
				<p><?php echo wc_attribute_label('pa_code') ?>
					<span><?php echo $product->get_attribute('code') ?></span></p>
			</div>
		</div>
	</div>
	<div class="left">
		<div class="slider__for-box">
			<?php
			$date     = $product->get_date_created();
			$date     = strtotime($date);
			$datediff = time() - $date;
			$datediff = ($datediff / (60 * 60 * 24)); ?>
			<div class="attentionIcon">
				<?php if ($datediff < 10) : ?>
					<span class="new-icon">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/new.png" alt="Новинки-иконка">
					</span>
				<?php endif; ?>
			</div>
			<div class="slider-for">
				<?php $gallery = $product->get_gallery_attachment_ids();
				foreach ($gallery as $img) : ?>
					<div class="slider__img">
						<img data-lazy="<?php echo wp_get_attachment_url($img) ?>" alt="Товар">
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="slider-nav">
			<?php foreach ($gallery as $img) : ?>
				<div class="slider__img">
					<img data-lazy="<?php echo wp_get_attachment_url($img) ?>" alt="Твар">
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="rigth">
		<div class="about__items">
			<div class="product__name">
				<span class="brand"><?php
									$categories = $product->get_category_ids();
									foreach ($categories as $cat) {
										$cat    = get_term($cat, 'product_cat');
										$parent = $cat->parent;
										if ($parent == 88 || $parent == 90) {
											echo $cat->name;
										}
									}
									?></span>
				<h1>
					<?php echo $product->get_name(); ?>
				</h1>
				<div class="article">
					<p><?php echo wc_attribute_label('pa_code') ?>
						<span><?php echo $product->get_attribute('code') ?></span></p>
				</div>
			</div>
			<div class="product__price">
				<div class="flex">
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

					<form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
						<style>
							.screen-reader-text {
								display: none;
							}
						</style>
						<?php do_action('woocommerce_before_add_to_cart_button'); ?>

						<?php
						do_action('woocommerce_before_add_to_cart_quantity');

						woocommerce_quantity_input(
							array(
								'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
								'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
								'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(),
								// WPCS: CSRF ok, input var ok.
							)
						);

						do_action('woocommerce_after_add_to_cart_quantity');
						?>
						<div class="addToCart">
							<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/commerce-and-shopping.png" alt="Купить товар"></button>
						</div>

						<?php do_action('woocommerce_after_add_to_cart_button'); ?>
					</form>

					<?php do_action('woocommerce_after_add_to_cart_form'); ?>
				</div>
			</div>
		</div>
		<div class="product__description hide">
			<p>
				<?php echo wpautop($product->get_description()) ?>
			</p>
		</div>
		<a href="#" class="product__description-show">Читать полностью</a>
	</div>
</div>


<div class="reviews">
	<h3>
		Отзывы
	</h3>
	<div class="reviews_content">
		<div class="review__box">
			<?php
			$comments = get_comments([
				'post_id' => $product->get_id(),
				'status'  => 'approve',
			]);
			if ($comments) :
				foreach ($comments as $comment) : ?>
					<div class="review__box-item">
						<div class="review__box-header">
							<p class="review__name"><strong><?php echo $comment->comment_author; ?></strong><span class="review__data"><?php echo date('d M Y года', strtotime($comment->comment_date)) ?></span>
							</p>
							<p class="like__count"><?php
													$rating = intval(get_comment_meta($comment->comment_ID, 'rating', true));
													echo $rating;
													?></p>
						</div>
						<p class="review__text">
							<?php echo $comment->comment_content; ?>
						</p>
					</div>
			<?php endforeach;
			endif;
			?>
		</div>
		<div id="reviews review_form">
			<style>
				.comment-notes {
					display: none;
				}
			</style>
			<?php
			$commenter    = wp_get_current_commenter();
			$comment_form = array(
				/* translators: %s is product title */
				'title_reply'         => esc_html__('Оставить отзыв', 'woocommerce'),
				/* translators: %s is product title */
				'title_reply_to'      => esc_html__('Leave a Reply to %s', 'woocommerce'),
				'title_reply_before'  => '<span id="reply-title" class="comment-reply-title">',
				'title_reply_after'   => '</span>',
				'comment_notes_after' => '',
				'label_submit'        => esc_html__('Submit', 'woocommerce'),
				'logged_in_as'        => '',
				'comment_field'       => '',
			);

			$name_email_required = (bool) get_option('require_name_email', 1);
			$fields              = array(
				'author' => array(
					'label'    => __('Ваше имя', 'woocommerce'),
					'type'     => 'text',
					'value'    => $commenter['comment_author'],
					'required' => $name_email_required,
				),
				'email'  => array(
					'label'    => __('Номер телефона или e-mail', 'woocommerce'),
					'type'     => 'text',
					'value'    => $commenter['comment_author_email'],
					'required' => $name_email_required,
				),
			);

			$comment_form['fields'] = array();

			foreach ($fields as $key => $field) {
				$field_html  = '<p class="comment-form-' . esc_attr($key) . '">';
				//$field_html .= '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] );

				if ($field['required']) {
					//$field_html .= '&nbsp;<span class="required">*</span>';
				}

				$field_html .= '<input placeholder="' .  esc_html($field['label']) . '" id="' . esc_attr($key) . '" name="' . esc_attr($key) . '" type="' . esc_attr($field['type']) . '" value="' . esc_attr($field['value']) . '" size="30" ' . ($field['required'] ? 'required' : '') . ' /></p>';

				$comment_form['fields'][$key] = $field_html;
			}

			$comment_form['fields']['my_cont'] = '<p class="comment-form-comment"><textarea placeholder="Текст вашего отзыва или коментария" id="comment" name="comment" cols="45" rows="8" required></textarea></p>';

			$account_page_url = wc_get_page_permalink('myaccount');
			if ($account_page_url) {
				/* translators: %s opening and closing link tags respectively */
				$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf(esc_html__('You must be %1$slogged in%2$s to post a review.', 'woocommerce'), '<a href="' . esc_url($account_page_url) . '">', '</a>') . '</p>';
			}

			if (wc_review_ratings_enabled()) {
				$comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__('Оцените товар', 'woocommerce') . '</label><select name="rating" id="rating" required>
						<option value="">' . esc_html__('Rate&hellip;', 'woocommerce') . '</option>
						<option value="5">' . esc_html__('Perfect', 'woocommerce') . '</option>
						<option value="4">' . esc_html__('Good', 'woocommerce') . '</option>
						<option value="3">' . esc_html__('Average', 'woocommerce') . '</option>
						<option value="2">' . esc_html__('Not that bad', 'woocommerce') . '</option>
						<option value="1">' . esc_html__('Very poor', 'woocommerce') . '</option>
					</select></div>';
			}
			if (is_user_logged_in()) :
				$comment_form['comment_field'] .= '<p class="comment-form-comment"><textarea placeholder="Текст вашего отзыва или коментария" id="comment" name="comment" cols="45" rows="8" required></textarea></p>';
			endif;
			$comment_form['label_submit'] = 'ОПУБЛИКОВАТЬ';
			comment_form(apply_filters('woocommerce_product_review_comment_form_args', $comment_form));
			?>
		</div>
	</div>

</div>