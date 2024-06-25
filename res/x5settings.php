<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => 'EACB80B5B712B2BE11BDDAA692A21F7D',
	'url' => 'http://localhost/',
	'homepage_url' => 'http://localhost/index.html',
	'icon' => '',
	'version' => '2024.2.4.0',
	'sitename' => 'filam-crestview',
	'lang_code' => 'en-GB',
	'public_folder' => '',
	'salt' => 'lrp3132kdzyf585u7eutun8n5a0yfbyeulk1utrnoru8qm9j3oa9gf2yi1yq2',
	'common_email_sender_addres' => 'noreply@christopher-m.websitex5.me',
	'date_format' => 'dd MMM yyyy',
	'date_format_ext' => 'dddd dd MMM yyyy',
	'date_format_no_day' => 'MMM yyyy',
	'date_format_no_day_ext' => 'MMM yyyy'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"le9oap60-imCpt\">Check word:</label><br />
			<input type=\"text\" id=\"le9oap60-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_kbxuxq2f.png',
	'notification_public_key' => 'BO9qQxWauAggh0GK3ho9i610btqWYqOPABDCsNyAS0cs_1d1Z3fOAxfZLfyuF3Wfgo_Mqk_LygFjVpAqGemNWJA',
	'notification_private_key' => 'FZYuBNPESEO7Jh62sbKYQgq5z2omrrwFGFEINlxAhm8',
	'notification_dbprefix' => 'w5_fs8jhna9_notifications_',
	'enable_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'6no33uhi' => array(
		'description' => '',
		'host' => 'localhost',
		'database' => 'krd5vk7t_db',
		'user' => 'krd5vk7t_db',
		'password' => '#1Yokota',
		'table_prefix' => ''
	)
);
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'http://localhost/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(67, 67, 67, 1); background-color: rgba(255, 255, 255, 1); padding: 10px 10px 10px 10px; border-style: solid; border-width: 1px 1px 1px 1px; border-color: rgba(67, 67, 67, 1) rgba(67, 67, 67, 1) rgba(67, 67, 67, 1) rgba(67, 67, 67, 1); border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;',
	'email_opening' => 'Dear Customer,<br /><br />Thank you for your order. We remind you that we are waiting for your payment.<br /><br />Below you will find the list of the products you have ordered, the billing and shipping details and the instructions to complete the payment.',
	'email_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_payment_opening' => 'Dear Customer,<br /><br />Thank you for your purchase. We confirm that we have correctly received your payment and that the order will be processed as soon as possible.<br /><br />Below you will find the list of the products you have ordered, the billing and shipping details.',
	'email_payment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_digital_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase.<br />Please find attached the list of download links for the products you have ordered:',
	'email_digital_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_physical_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase. We confirm the order was correctly processed and shipped. <br />Please find attached the list of the ordered products:',
	'email_physical_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'sendEmailBeforePayment' => false,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '$',
	'currency_code' => 'USD',
	'currency_name' => 'United States of America, Dollars',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array(
	'zxi1gvr1' => array(
		'id' => 'zxi1gvr1',
		'name' => 'New Category',
		'containsProductsWithProductPage' => false,
		'products' => array(),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_fs8jhna9_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Bank Transfer',
		'description' => 'Pay later with Bank Transfer.',
		'email_text' => 'The following data is required for payments via Bank Transfers:

XXX YYY ZZZ

Please note that once the payment is completed it is necessary to send a copy of the receipt along with the Order Number.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Mail',
		'description' => 'The goods will be delivered in 3-5 days.',
		'email_text' => 'Shipping by Mail.\\nThe goods will be delivered in 3-5 days.',
		'tracking_type' => 'none'
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Express Delivery',
		'description' => 'The goods will be delivered in 1-2 days.',
		'email_text' => 'Shipping by Express Delivery.\\nThe goods will be delivered in 1-2 days.',
		'tracking_type' => 'none'
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2024.2.4 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#37474F" style="background-color: #37474F;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px; border-collapse: separate; ">' . "\n\t" . '<tr><td id="imEmailHeader" style="text-align: center; width: 700px;border-top-style: solid; border-top-color: #000000; border-top-width: 1px; border-left-style: solid; border-left-color: #000000; border-left-width: 1px; border-right-style: solid; border-right-color: #000000; border-right-width: 1px; border-bottom-style: none; border-bottom-color: transparent; border-bottom-width: 0px; border-bottom: none; border-top-left-radius: 0px; border-top-right-radius: 0px; background-color: #FFFFFF;" width="700"><img src="http://localhost/images/filam-crestview-logo_g69bwypj.png" style="width: 100px; border: none; background-color: WebsiteX5.BL.Core.Settings.XMLColor; margin-top: 10px; margin-bottom: 10px; margin-left: 10px;margin-right: 10px;" width="100"; ></td></tr>' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 12pt \'Bitter\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #000000 #000000 #000000 #000000; border-top-width: 0px; border-top: none; border-right-width: 1px; border-bottom-width: 0; border-bottom: none; border-left-width: 1px; margin-top: 25px;  margin-bottom: 25px;  margin-left: 25px;  margin-right: 25px;  background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailIcons" style="background-color: #FFFFFF;border-left-style: solid; border-left-color: #000000; border-left-width: 1px; border-right-style: solid; border-right-color: #000000; border-right-width: 1px; border-bottom-style: solid; border-bottom-color: #000000; border-bottom-width: 1px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;  padding-top: 25px;  padding-bottom: 25px;  padding-left: 15px;  padding-right: 15px;  text-align: center;  min-height: 300px; " width="700"></td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 9pt \'Bitter\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'This e-mail contains information that is intended solely for the above mentioned addressee.<br>If you have received this e-mail by error, please notify the sender immediately and destroy it, without copying it.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#37474F';
$ImMailer->emailContentStyle = 'font: normal normal normal 12pt \'Bitter\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Bitter;';

// End of file x5settings.php