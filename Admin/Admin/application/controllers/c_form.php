<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Form extends CI_Controller {

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
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->database();

		$this->form_validation->set_rules('callno', 'Call No', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('isbn', 'ISBN/ISSN', 'required');
		$this->form_validation->set_rules('booktype', 'Book Type', 'required');
		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('bookstatus', 'Book Status', 'required');
		$this->form_validation->set_rules('editor', 'Editor', 'required');
		$this->form_validation->set_rules('publisher', 'Publisher', 'required');


		if($this->form_validation->run()==FALSE){
			$this->load->view('v_addbook');
		}
		else{
			$this->load->view('v_formsuccess');
		}

	}

	public function insert_to_db(){
		$this->load->model('m_bookmodel');
		$this->m_bookmodel->insert_to_db();
		$this->load->view('v_formsuccess');
		//insert query
		//$this->db->query("");
	}
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>
