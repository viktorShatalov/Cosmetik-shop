<?php
/*
Template Name: Страница контактов
*/
?>

<?php get_header(); ?>

<main>
	<section id="contacts">
		<div class="conteiner m-auto">
			<!-- breadcumps -->
			<div id="breadcumbs">
				<?php woocommerce_breadcrumb() ?>
			</div>
			<div class="content">
				<div class="left__content">
					<ul>
						<li><a href="#">Про компанию</a></li>
						<li><a href="#">Магазины FaceCare</a></li>
						<li><a href="#">Интернет-магазин</a></li>
						<li><a href="#">Карьера и вакансии</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
				<div class="right__content">
					<h2>Контакты</h2>
					<div class="top__row">
						<div class="map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.7336158112876!2d30.495579315154583!3d50.44606229556312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cef4fb2ededf%3A0x233cacb3cac058c6!2z0LHRg9C70YzQstCw0YAg0KLQsNGA0LDRgdCwINCo0LXQstGH0LXQvdC60LAsIDE0NSwgNSDRjdGC0LDQtiwg0L7RhC4xMDk4LCDQmtC40ZfQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1590511201213!5m2!1sru!2sua"
								width="620" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
								tabindex="0">
							</iframe>
						</div>
						<?php 	echo do_shortcode('[contact-form-7 id="208" title="Форма в контактах-рус"]'); ?>
					</div>
					<div class="bottom__row">
						<div class="contacts__items">
							<div class="item">
								<h4>Адрес:</h4>
								<p><?php echo carbon_get_theme_option('address') ?></p>
							</div>
							<div class="item">
								<h4>Телефон:</h4>
								<a href="tel:<?php echo carbon_get_theme_option('tel1') ?>"><?php echo carbon_get_theme_option('tel1') ?></a>
								<a href="tel:<?php echo carbon_get_theme_option('tel2') ?>"><?php echo carbon_get_theme_option('tel2') ?></a>
								<a href="tel:<?php echo carbon_get_theme_option('tel3') ?>"><?php echo carbon_get_theme_option('tel3') ?></a>
								
							</div>
							<div class="item">
								<h4>Почта:</h4>
								<a href="mailto:<?php echo carbon_get_theme_option('mail') ?>"><?php echo carbon_get_theme_option('mail') ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
