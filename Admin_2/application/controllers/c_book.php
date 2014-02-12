<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_book extends CI_Controller {

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

	public function c_book()
	{
		parent::__construct();
		$this->load->model('m_book');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function book_add(){
		
		$this->m_book->insert_book();
		redirect('/c_index/','refresh');
	
	}
	
	public function book_remove(){
	
		$this->m_book->delete_book();
		redirect('/c_index/','refresh');
	
	}

	public function book_edit_form(){

		$data['query'] = $this->m_book->get_book();
		$this->load->view('v_editbook',$data);

	}
		
	public function book_edit(){
		
		$this->m_book->update_book();
		redirect('/c_index/','refresh');
	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */