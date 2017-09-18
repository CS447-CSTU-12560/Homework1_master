<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'models/Base_model.php';

/**
* 
*/
class Utility_model extends Base_model
{	
	function __construct()
	{
        parent::__construct();
	}

	function isMatchPassword($input_pass, $db_pass) {
		return ($input_pass == $db_pass);
	}
}