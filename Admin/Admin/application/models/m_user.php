<?php

class M_user extends CI_Model{
	/*
    function get_db($bktitle){
	
		$query = $this->db->query("SELECT title FROM book WHERE title = '$bktitle'");
		return $query->result();
	
	}
	*/
	function insert_new_user(){
	
		$data = array(
		
			'name' =>  $this->input->post('name'),
			'username' => $this->input->post('uname'),
			'password' => $this->input->post('pword'),
			'email' => $this->input->post('email') ,
			'mobile_no' =>$this->input->post('cnum') ,
			'college' => $this->input->post('college') ,
			'userid_no' => $this->input->post('usr_num'),
			'user_type' => 'User' ,
			
		);
	
		$this->db->insert('user', $data);
	
	}
	
	function login(){
	
		$uname = $this->input->post('uname');
		$pword = $this->input->post('pword');
	
		$found = $this->db->simple_query("SELECT username, password FROM user WHERE username = '$uname' AND password = '$pword' ");

		if($found){
		
			$userdata = array(
		
				'username' => $uname,
				'logged_in' => TRUE
			
			);
			
			$this->session->set_userdata($userdata);
			
			return TRUE;
			
		}else{
		
			return FALSE;
		
		}
	
	}
	public function get_transaction()
	{
		// get library_id of user logged in from session
		//$uname = $this->session->userdata('username');
		//$library_id = $this->query("SELECT library_id from user WHERE username = '$uname'");
		$this->db->select('*');
		$this->db->from('request');
		$this->db->join('book','book.book_id = request.book_id');
		$this->db->join('transaction','transaction.request_id = request.request_id');
		$query = $this->db->get();
		return $query->result_array();

		
		// select request.request_id, request.book_id, request.request_status, 
		// request.request_date, title, call_no from request, book where library_id=logged_in and request.book_id = book.book_id;
		// select request_id, book_id, status, request_date from request where library_id=logged_in;
		// select title, call_no from book where book_id=book_id;
		// select request_id, fine, return_date from transaction where request_id=request_id;

	}
	
}

?>