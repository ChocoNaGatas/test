<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_index extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['query'] = $this->m_book->view_all_books();
		$this->load->view('v_admin',$data);
	}

	public function c_index()
	{
		parent::__construct();
		$this->load->model('m_book');
		$this->load->helper('url');
		$this->load->helper('form');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */