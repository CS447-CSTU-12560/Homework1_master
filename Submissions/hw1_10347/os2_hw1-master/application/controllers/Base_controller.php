<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/const/status_const.php';

class Base_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->check_login();
		redirect(BASEURL . 'read');
	}

	function check_login() {
		if (!$this->session->userdata('username')) {
			redirect(BASEURL . 'login');
		}
	}

	function return_json($result) {
	    $this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($result));
	}

    function get_params() {

        $sget = $this->input->get();
        $spost = $this->input->post();
        $data = (isset($spost) && $spost != NULL) ? $spost : $sget;

        return $data;
    }

	function init_result($res = false) {

	    $res_data = array(
	        'result' => false,
	        'status_code' => 500,
	        'status_message' => "Error Invalid",
	    );
	    if ($res != false) {
	        $res_data = array(
	            'result' => true,
	            'status_code' => 200,
	            'status_message' => 'success',
	        );
	    }

	    return $res_data;
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
