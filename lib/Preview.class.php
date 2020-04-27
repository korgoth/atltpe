<?php
require(__DIR__.'/smarty/Smarty.class.php');

class Preview
{
	var $load = NULL;	

	public function __construct()
	{
	}

	function sendNoCacheHeaders()
	{
		header('Cache-Control: no-cache, no-store, must-revalidate');
		header('Pragma: no-cache');
		header('Expires: 0');	
	}

	function get_templates($path = NULL)
	{
		$templates = array();
		if ($path) {
			$dirs = scandir(TEMPLATES_PATH.'/'.$path);
			foreach ($dirs as $key => $value) {
				if (!preg_match('/^\./', $value)) {

					$subdirs = scandir(TEMPLATES_PATH.'/'.$path.'/'.$value);
					foreach ($subdirs as $k => $v) {
						if (!preg_match('/^\./', $v)) {
							//find available languages
							$l = array();
							foreach (scandir(TEMPLATES_PATH.'/'.$path.'/'.$value.'/'.$v) as $_k => $_v) {
								if (!preg_match('/^\./', $_v)) {
									$templates[$value][$v][] = $_v;
								}
							}
						}
					}
				}
			}
		}
		return $templates;
	}

	function render($params)
	{
		switch ($params['type']) {
			case 'blog':
				$this->render_blog($params);	
			break;
			case 'order':
				$this->render_order($params);	
			break;
		}
	}

	function render_blog($params)
	{
		$campaign = $params['campaign'];

		$campaign['track_click'] = $this->prep_pixel(
													$campaign['track_click'],
													array(
														'GETPARAMS' => $params['getparams'],
														'SESSIONID' => uniqid('SESSID-'),
														'IP' => $_SERVER['REMOTE_ADDR'],
														'PAYOUT' => $campaign['campaign_price'],
														'PAYOUT_CURRENCY' => $campaign['campaign_currency'],
														'URI' => $campaign['uri'],
														'SOURCE' => $campaign['source']
													)
												);
		//we need to mimick a loader	
		$this->load = new Loader($campaign);

		$template_path = TEMPLATES_PATH.'/'.BLOG_TEMPLATES_PATH.'/'.$params['template'].'/'.$campaign['country']; 

		//check if a template exists
		if (file_exists($template_path.'/index.php')) {

			if ($params['force_mobile'] == '1' && file_exists($template_path.'/mobile/index.php')) {
				$template_path .= '/mobile/';	
			}
			//get template contents
			$contents = file_get_contents($template_path.'/index.php');

			//set required variables
			$assets_url = './'.$template_path;

			$contents = eval(' ?>'.$contents.'<?php ');

			echo($contents);
		} else  { 
			die('Template not found <a href=index.php>BACK</a> and try again');
	    }
	}


	function render_order($params)
	{
		$campaign = $params['campaign'];

		$campaign['track_'.$_GET['thank']?'sale':'landing'] = prep_pixel(
									$campaign['track_'.$_GET['thank']?'sale':'landing'],
									array(
										'GETPARAMS' => $params['getparams'],
										'SESSIONID' => uniqid('SESSID-'),
										'IP' => $_SERVER['REMOTE_ADDR'],
										'PAYOUT' => $campaign['campaign_price'],
										'PAYOUT_CURRENCY' => $campaign['campaign_currency'],
										'URI' => $campaign['uri'],
										'SOURCE' => $campaign['source'],
										'ORDERID' => $_GET['thank'] ? uniqid('ORDERID-') : NULL
									)
								);

		$template_path = TEMPLATES_PATH.'/'.ORDER_TEMPLATES_PATH.'/'.$params['template'].'/'.$campaign['country'];
		if (file_exists($template_path.'/index.html')) {
			if ($params['force_mobile'] == '1' && file_exists($template_path.'/mobile/index.html')) {
				$template_path .= '/mobile/';	
			}
			$smarty = new Smarty();	
			$smarty->assign('cdn', './'.$template_path);
			$smarty->assign('dir', '.');
			$smarty->assign('lang', $campaign['country']);
			$smarty->assign('campaign', $campaign);
			$smarty->assign('GA', 'TEST_GA');
			$smarty->display(__DIR__.'/../'.$template_path.'/'.($_GET['thank'] ? 'thank.html' : 'index.html'));
		} else { 
			die('Template not found <a href=index.php>BACK</a> and try again');
	    }
	}


	private function prep_pixel($pixel, $data = array())
	{
		if ($pixel) {
			if ($data['GETPARAMS'] && !is_array($data['GETPARAMS'])) {
				parse_str($data['GETPARAMS'], $data['GETPARAMS']);
			}
			
			preg_match_all('/\[GET:([a-zA-Z0-9_\-]+)\]/', $pixel, $matches);
			
			if ($matches[0]) {
				foreach ($matches[0] as $key => $value) {
					//if ($data['GETPARAMS'][$matches[1][$key]]) {
						$pixel = str_replace($matches[0][$key], $data['GETPARAMS'][$matches[1][$key]], $pixel);
					//}
				}
			}

			$pixel = str_replace('[GETPARAMS]', $data['GETPARAMS'] ? http_build_query($data['GETPARAMS']) : '', $pixel);
			$pixel = str_replace('[SESSIONID]', $data['SESSIONID'], $pixel);
			$pixel = str_replace('[ORDERID]', $data['ORDERID'], $pixel);
			$pixel = str_replace('[IP]', $data['IP'], $pixel);
			$pixel = str_replace('[SOURCE]', $data['SOURCE'], $pixel);
			$pixel = str_replace('[URI]', $data['URI'], $pixel);
			$pixel = str_replace('[PAYOUT]', $data['PAYOUT'], $pixel);
			$pixel = str_replace('[PAYOUTCURRENCY]', $data['PAYOUTCURRENCY'], $pixel);

			//calculate estimates
			$EUR_TO_USD = 1.12;
			if ($data['PAYOUT_CURRENCY'] == 'EUR') {
				$pixel = str_replace('[PAYOUTEURest]', $data['PAYOUT'], $pixel);
				$pixel = str_replace('[PAYOUTUSDest]', number_format($data['PAYOUT']*$EUR_TO_USD,2), $pixel);
			} else  //currency is USD
			{
				$pixel = str_replace('[PAYOUTEURest]', number_format($data['PAYOUT']/$EUR_TO_USD,2), $pixel);
				$pixel = str_replace('[PAYOUTUSDest]', $data['PAYOUT'], $pixel);
			}
			
			return $pixel;
		}
	}
}
