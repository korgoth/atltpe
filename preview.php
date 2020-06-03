<?php
error_reporting(E_ERROR);

if (!$_GET['tpl_type'] || !$_GET[$_GET['tpl_type'].'_template']) {
	//not enough params	
	die('Not enough parameters. Please go <a href=index.php>BACK</a> and try again');
}
require('config.php');
require('lib/Loader.class.php');
require('lib/Preview.class.php');

//mimick a campaign here
$campaign['source'] =  'TEST';
$campaign['camppaign'] =  'TEST';

$campaign['price'] = (float)$_GET['price'] > 0 ? $_GET['price'] : 999;
$campaign['shipping'] = (float)$_GET['shipping'] > 0 ? $_GET['shipping'] : 0;
$campaign['currency'] = isset($_GET['currency']) ? $_GET['currency'] : 'EUR';

$campaign['track_click'] = $_GET['track_click'] ? $_GET['track_click'] : '<!-- [track_click] -->';
$campaign['track_landing'] = $_GET['track_landing'] ? $_GET['track_landing'] : '<!-- [track_landing] -->';
$campaign['track_sale'] = $_GET['track_sale'] ? $_GET['track_sale'] : '<!-- [track_sale] -->';
$campaign['track_complete'] = $_GET['track_complete'] ? $_GET['track_complete'] : '<!-- [track_complete] -->';

//set campaign defaults here
$campaign['exit_popup'] = isset($_GET['exit_popup']) ? $_GET['exit_popup'] : 1;
$campaign['mouseout_popup'] = isset($_GET['mouseout_popup']) ? $_GET['mouseout_popup'] : 1;
$campaign['back_js'] = isset($_GET['back_js']) ? $_GET['back_js'] : 0;
$campaign['last_buyers'] = $_GET['last_buyers'] ? $_GET['last_buyers'] : 1;

	
//get last part of template to set the campaign country
$pathinfo = pathinfo($_GET[$_GET['tpl_type'].'_template']);
$campaign['country'] =   $_GET['country'] ? $_GET['country'] : $pathinfo['basename'];

$campaign['campaign_price'] = 99;
$campaign['campaign_currency'] = 'EUR';
$campaign['uri'] = 999999;
$campaign['product_id'] = 12;

$preview = new Preview();

$preview->sendNoCacheHeaders();
$preview->render(array(
						'campaign' => $campaign, 
						'force_mobile' => $_GET['force_mobile'],
						'getparams' => $_GET['getparams'],
						'type'  => $_GET['tpl_type'],
						'template' => $_GET[$_GET['tpl_type'].'_template'], 
					)
				);
