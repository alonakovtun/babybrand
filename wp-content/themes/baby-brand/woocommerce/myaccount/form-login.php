<?php

/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>
<div class="login-block container">
	<div class="login__body login-box">
		<div class="login__column item-login">
			<div class="item-login__name">
				<?php esc_html_e('Login', 'woocommerce'); ?>
			</div>
			<form class="woocommerce-form woocommerce-form-login login item-login__form" method="post">

				<?php do_action('woocommerce_login_form_start'); ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<!-- <label for="username"><?php esc_html_e('Username or email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label> -->
					<input placeholder="<?php esc_html_e('Email', 'woocommerce'); ?>" type="text" class="woocommerce-Input woocommerce-Input--text input-text item-login__email" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																																																				?>
				</p>
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<!-- <label for="password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label> -->
					<input placeholder="<?php esc_html_e('Password', 'woocommerce'); ?>" class="woocommerce-Input woocommerce-Input--text input-text item-login__pass" type="password" name="password" id="password" autocomplete="current-password" />
				</p>

				<?php do_action('woocommerce_login_form'); ?>

				<p class="form-row">
					<!-- <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
								<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Remember me', 'woocommerce'); ?></span>
							</label> -->
					<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
					<button type="submit" class="item-login__btn woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>
				</p>
				<p class="woocommerce-LostPassword lost_password">
					<a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Forget password?', 'woocommerce'); ?></a>
				</p>

				<?php do_action('woocommerce_login_form_end'); ?>

			</form>
		</div>
		<div class="login__column register-block">
			<div class="item-login__name">
				create an account
			</div>
			<div class="item-login__text">Sign in to check the status of your most
				recent
				order and your order history.</div>

			<a class="item-login__btn button__trigger-register">register</a>


		</div>

	</div>

	<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
		<div class="register-box">
			<div class="u-columns col2-set" id="customer_login">

				<div class="u-column1 col-1">

				<?php endif; ?>


				<div class="login__body register">
					<div class="login__column">
						<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
							<div class="u-column2 col-2">
								<div class="item-login__name">
									<?php esc_html_e('Create an account', 'woocommerce'); ?>
								</div>
								<form method="post" class="woocommerce-form woocommerce-form-register register item-login__form" <?php do_action('woocommerce_register_form_tag'); ?>>

									<?php do_action('woocommerce_register_form_start'); ?>

									<?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>

										<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
											<!-- <label for="reg_username"><?php esc_html_e('Username', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label> -->
											<input type="text" class="woocommerce-Input woocommerce-Input--text input-text " name="username" id="reg_username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																																								?>
										</p>

									<?php endif; ?>

									<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
										<!-- <label for="reg_email"><?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label> -->
										<input placeholder="<?php esc_html_e('Email', 'woocommerce'); ?>" type="email" class="woocommerce-Input woocommerce-Input--text input-text item-login__email" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																																																						?>
									</p>

									<?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>

										<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
											<!-- <label for="reg_password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label> -->
											<input placeholder="<?php esc_html_e('Password', 'woocommerce'); ?>" type="password" class="woocommerce-Input woocommerce-Input--text input-text item-login__pass" name="password" id="reg_password" autocomplete="new-password" />
										</p>

									<?php else : ?>

										<p><?php esc_html_e('A password will be sent to your email address.', 'woocommerce'); ?></p>

									<?php endif; ?>

									<?php do_action('woocommerce_register_form'); ?>

									<p class="woocommerce-form-row form-row">
										<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
										<button type="submit" class="item-login__btn woocommerce-Button woocommerce-button button woocommerce-form-register__submit mb-0" name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><?php esc_html_e('Register', 'woocommerce'); ?></button>
									</p>

									<?php do_action('woocommerce_register_form_end'); ?>

								</form>

								<p class="link"><?php esc_html_e('By creating an account, you accept our Terms and Conditions and 
			confirm that you have read our Privacy Policy.', 'woocommerce'); ?></p>

							</div>
					</div>



				</div>
			<?php endif; ?>

				</div>
			</div>

			<?php do_action('woocommerce_after_customer_login_form'); ?>