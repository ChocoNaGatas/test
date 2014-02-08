<?php 

	class m_book extends CI_Model{
	
		function insert_book(){
		
			$data = array(
			
				'call_no' =>  $this->input->post('callno'),
				'title' => $this->input->post('title'),
				'author' => $this->input->post('author'),
				'isbn' => $this->input->post('isbn'),
				'book_type' =>$this->input->post('btype'),
				'description' => $this->input->post('descr'),
				'book_status' => 'ON SHELF',
				'editor' => $this->input->post('editor'),
				'publisher' => $this->input->post('pub'),
				
			);
		
			$this->db->insert('book', $data);
		
		}
		
			function delete_book(){
		
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
		
			function update_book(){
		
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

	}

?>