<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /* -------------------------
     * Debugger
     */

    function _toast($var = '') {
		ob_start();
			var_dump($var);
			$foo_var = ob_get_contents(); //or ob_get_clean()
			log_message('debug', $foo_var);
		ob_end_clean();

        die();
        return;
    }

    function _toast_not_die($var = '') {
        ob_start();
                var_dump($var);
                $foo_var = ob_get_contents(); //or ob_get_clean()
                log_message('debug', $foo_var);
        ob_end_clean();

        // no need to die();
        return;
    }
}
