<div class="header-block__container container">
    <div class="login__body">
        <div class="login__column item-login">
            <div class="item-login__name">
                <?php esc_html_e('Login', 'woocommerce'); ?>
            </div>
            <form class="woocommerce-form woocommerce-form-login login item-login__form" method="post">

                <?php do_action('woocommerce_login_form_start'); ?>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <!-- <label for="username"><?php esc_html_e('Username or email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label> -->
                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text item-login__email" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
                                                                                                                                                                                                                                                                                    ?>
                </p>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <!-- <label for="password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label> -->
                    <input class="woocommerce-Input woocommerce-Input--text input-text item-login__pass" type="password" name="password" id="password" autocomplete="current-password" />
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
        <div class="login__column">
            <div class="item-login__name">
                create an account
            </div>
            <div class="item-login__text">Sign in to check the status of your most
                recent
                order and your order history.</div>
            <form action="">
                <button class="item-login__btn">register</button>
            </form>
        </div>

    </div>
</div>