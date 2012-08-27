<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends My_Controller {

	function __construct(){
        parent::__construct();
    }
	
	function index()
	{
		$this->load->helper('url');		
		$data['title'] = ucfirst('Report page'); // Capitalize the first letter
		$this->load->template('report/home');		
				
	}
}
