<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends My_Controller {

	function __construct(){
        parent::__construct();
    }
	
	function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->helper('url');
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		
		$this->load->view('templates/footer', $data);
		
	}
}
