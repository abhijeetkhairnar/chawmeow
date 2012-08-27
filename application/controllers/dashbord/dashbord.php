<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashbord extends My_Controller {

	function __construct(){
        parent::__construct();
    }
		
	function index()
	{
		$this->load->helper('url');		
		$data['title'] = ucfirst('Dashbord page'); // Capitalize the first letter
		$this->load->view('templates/header', $data);
		$this->load->view('dashbord/dashbord', $data);		
		$this->load->view('templates/footer', $data);
		
	}
}
