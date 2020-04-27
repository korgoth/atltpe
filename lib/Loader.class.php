<?php

/**
 * 
 */
class Loader
{
	var $campaign = '';
	
	public function __construct($campaign = array())
	{
		$this->campaign = $campaign;	
	}

	function view($fname, $data = array())
	{
		//set variables
		foreach ($data as $k => $v) {
			${$k} = $v;	
		}
		$campaign = $this->campaign;
		$goto_url = $goto_url_bjs = 'blog_link_working.html';

		//get fname contents
		$contents = file_get_contents('views/'.preg_replace('/.php$/', '', $fname).'.php');
		$contents = eval(' ?>'.$contents.'<?php ');

		return($contents);
	}
}
