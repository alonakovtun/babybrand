<?php
/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load colors.
$bg        = get_option( 'woocommerce_email_background_color' );
$body      = get_option( 'woocommerce_email_body_background_color' );
$base      = get_option( 'woocommerce_email_base_color' );
$base_text = wc_light_or_dark( $base, '#202020', '#ffffff' );
$text      = get_option( 'woocommerce_email_text_color' );

// Pick a contrasting color for links.
$link_color = wc_hex_is_light( $base ) ? $base : $base_text;

if ( wc_hex_is_light( $body ) ) {
	$link_color = wc_hex_is_light( $base ) ? $base_text : $base;
}

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $body, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );
$text_lighter_40 = wc_hex_lighter( $text, 40 );

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
// body{padding: 0;} ensures proper scale/positioning of the email in the iOS native email app.
?>
body {
	padding: 0;
}


#wrapper {
	background-color: <?php echo esc_attr( $bg ); ?>;
	margin: 0;
	padding: 70px 0;
	-webkit-text-size-adjust: none !important;
	width: 100%;
}

#template_container {
	background-color: <?php echo esc_attr( $body ); ?>;
	border: 0;
	border-radius: 0 !important;
}

#template_header {
	background-color: <?php echo esc_attr( $body ); ?>;
	border-radius: 0 !important;
	color: <?php echo esc_attr( $text ); ?>;
	border-bottom: 0;
	font-weight: bold;
	line-height: 100%;
	vertical-align: middle;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}

#template_header h1,
#template_header h1 a {
	color: <?php echo esc_attr( $text ); ?>;
}

#template_header_image {
	padding: 60px 0 50px;
	text-align: center;
}

#template_header_image img {
	margin-left: 0;
	margin-right: 0;
	max-width: 260px;
	width: auto;
	height: 25px;
}

#template_footer td {
	padding: 0;
	background-color: #fff;
	
}

#template_footer #credit {
	border: 0;
	color: #000;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 14px;
	line-height: 150%;
	padding: 30px 0;
}

#template_footer .footer-links {
	list-type: none;
	margin: 0;
	padding-left: 60px;
}

#template_footer .footer-links li {
	display: inline-block;
	padding-right: 55px;
	
}

#template_footer .footer-links li a {
	font-size: 14px;
	color: #000;
	text-transform: uppercase;
	text-decoration: none;
	font-weight: 400;
}

#body_content {
	background-color: <?php echo esc_attr( $body ); ?>;
}

#body_content table td {
	padding: 10px 0 32px;
}

#body_content table td td {
	padding: 12px;
}

#body_content table td th {
	padding: 12px;
}

#body_content td ul.wc-item-meta {
	font-size: small;
	margin: 1em 0 0;
	padding: 0;
	list-style: none;
}

#body_content td ul.wc-item-meta li {
	margin: 0.5em 0 0;
	padding: 0;
}

#body_content td ul.wc-item-meta li p {
	margin: 0;
}

#body_content p {
	margin: 0 0 16px;
}

#body_content_inner {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 16px;
	line-height: 150%;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
	
}

#body_content_inner p{
	padding-left: 60px;
	color: #000;
	font-size: 14px;
	text-transform: uppercase;
}

#body_content_inner p:last-child{
	text-transform: none;
	padding-right: 60px;
	font-size: 12px;
}

#body_content_inner .subtitle{
	width: 38%;
	font-weight: 300;
	text-transform: none;
	margin-bottom: 55px;
}

#header_wrapper {
	padding: 50px 40px;
	display: block;
}

h1 {
	color: <?php echo esc_attr( $base ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 30px;
	font-weight: 300;
	line-height: 150%;
	margin: 0;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h2 {
	color: <?php echo esc_attr( $base ); ?>;
	display: block;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 18px;
	font-weight: bold;
	line-height: 130%;
	margin: 0 0 18px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h3 {
	color: <?php echo esc_attr( $base ); ?>;
	display: block;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 16px;
	font-weight: bold;
	line-height: 130%;
	margin: 16px 0 8px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

a {
	color: <?php echo esc_attr( $text ); ?>;
	font-weight: normal;
}

img {
	border: none;
	display: inline-block;
	font-size: 14px;
	font-weight: bold;
	outline: none;
	text-decoration: none;
	text-transform: capitalize;
	vertical-align: middle;
	margin-<?php echo is_rtl() ? 'left' : 'right'; ?>: 10px;
	max-width: 100%;
    width: 225px;
    height: 320px;
	object-fit: cover;
}

.mail-title-wrap {
	padding: 0 40px 50px !important;
	text-align: center;
	text-transform: uppercase;
	font-size: 18px;
}

.mail-title-wrap p {
	margin: 0 !important;
	color: #000;
	font-size: 18px;
	text-transform: none;
	font-family: 'Readex Pro', sans-serif;
}

.mail-title-wrap a {
	color: #000;
}

.address-title {
	color: #000;
	border-top: 1px solid #e5e5e5;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 14px;
	font-weight: 300;
	line-height: 1;
	margin: 0;
	padding: 60px 60px 15px;
	text-transform: uppercase;
}

.address {
	padding: 0px 60px 60px;
	color: #000;
	font-style: normal;
	font-size: 14px;
	font-weight: 300;
	text-transform: uppercase;
}

.address a{
	color: #000;
	text-decoration: none;
}

.text {
	color: <?php echo esc_attr( $text ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}

.link {
	color: #000;
	text-transform: uppercase;
	font-weight: 300;
	text-decoration: none;
}

.additional-content-wrap {
	padding: 30px 40px 0px;
	border-top: 1px solid #eaeaea;
}

.additional-content-wrap p {
	font-size: 16px;
	margin: 0 !important;
	color: #138796;
	text-align: center;
}

.order-title {
	padding: 25px 60px;
	margin: 0 !important;
	color: #000;
	font-size: 14px;
	line-height: 1;
	font-weight: 300;
	display: flex;
    justify-content: space-between;

	border-top: 1px solid #e5e5e5;
	border-bottom: 1px solid #e5e5e5;
}

.wc-bacs-bank-details-heading {
	color: <?php echo esc_attr( $text ); ?>;
	font-weight: 300;
	line-height: 1;
	text-transform: uppercase;
}

.wc-bacs-bank-details {
	padding-left: 1em;
	margin-bottom: 60px;
}

.order_item .image-col {
	padding: 0 !important;

	border-top: 0;
	border-left: 0;
	border-right: 0;

	width: 250px;
	padding-left: 60px!important;
	padding-bottom: 15px!important;
}

.order_item .description-col {

	border-top: 0;
	border-right: 0;
	padding-right: 60px!important;
	padding-top: 25px!important;
}

.order_item .description-col p{
	padding-left: 0 !important;
}

.order_item{
	padding: 0 40px;
}

.order_item p {
	font-size: 16px;
	text-transform: none;
	margin: 0 !important;
	color: #6C6D6E;
}

.order_item .title {
	display: flex;
    justify-content: space-between;
}

.order_item .title p:first-child {
	width: 60%;
}



.order_item .qty-row {
	margin: 25px 0 0 !important;
	font-size: 14px!important;
	text-transform: uppercase!important;
}


.order-details-totals .empty-col {
	height: 30px;

	border-bottom: 1px solid #ececec;
}

.order-details-totals th {
	text-align: left;
	padding: 12px 60px !important;
	font-weight: normal;
	text-transform: uppercase;
	color: #000;
	font-size: 14px;
}

.order-details-totals td {
	text-align: right;
	padding: 12px 60px !important;
	font-weight: normal;
	text-transform: uppercase;
	color: #000;
	font-size: 14px;
}

.order-details-totals .order_total th,
.order-details-totals .order_total td {
	color: #000;
	padding: 12px 60px !important;
	font-weight: 600;
	font-size: 14px;

	padding-bottom: 23px;
}

.mail-order-meta-wrap {

}
.mail-order-meta-wrap h3 {
	border-top: 1px solid #b2b2b2;
	border-bottom: 1px solid #b2b2b2;

	padding: 15px 40px !important;
	margin: 0 !important;

	color: <?php echo esc_attr( $text ); ?>;
	text-transform: uppercase;
	font-weight: normal;
}

.mail-order-meta-wrap p {
	padding: 15px 40px !important;
}

.hello-title{
	font-weight: 600;
}

.title-table{
	display: flex;
	justify-content: space-between;
	padding-right: 60px;
	margin-top: 35px;
}

.title-table p{
	margin-bottom: 30px!important;
	padding-right: 0px!important;
	font-size: 14px!important;
	text-transform: uppercase!important;
}

.title p{
	padding-left: 0px;
	padding-right: 0px!important;
	font-size: 14px!important;
}

<?php
