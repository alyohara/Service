<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries/Format.php');
require_once(APPPATH.'libraries/REST_Controller.php');

class Welcome extends CI_Controller {

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
		$this->load->database();

		$feeds = $this->db->get('usr_users');
		$data['records'] = $feeds->result();
		foreach ($data['records'] as $row)
		{
			echo $row->id;
			echo $row->username;
			echo $row->email;
		}
		$this->load->view('welcome_message');
	}
}
