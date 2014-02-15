<?php 

	class m_book extends CI_Model{
	
		function insert_book(){
		
			$data = array(
			
				'call_no' => htmlspecialchars($_POST['callno']),
				'title' => htmlspecialchars($_POST['title']),
				'author' => htmlspecialchars($_POST['author']),
				'isbn' => htmlspecialchars($_POST['isbn']),
				'book_type' => htmlspecialchars($_POST['btype']),
				'description' => htmlspecialchars($_POST['descr']),
				'book_status' => 'ON SHELF',
				'editor' => htmlspecialchars($_POST['editor']),
				'publisher' => htmlspecialchars($_POST['pub']),
				
			);
		
			$this->db->insert('book', $data);
		
		}
		
			function delete_book(){
			
				$bookid = htmlspecialchars($_POST['bookid']);
				$this->db->query("Delete from book where book_id = '$bookid'");
		
		}
			
		function update_book(){

			$book_id = htmlspecialchars($_POST['bookid']);
			$call_no = htmlspecialchars($_POST['callno']);
			$title = htmlspecialchars($_POST['title']);
			$author = htmlspecialchars($_POST['author']);
			$isbn = htmlspecialchars($_POST['isbn']);
			$book_type = htmlspecialchars($_POST['btype']);
			$description = htmlspecialchars($_POST['descr']);
			$publisher = htmlspecialchars($_POST['pub']);
		
			$this->db->query("Update book set call_no='$call_no', title='$title', author='$author', isbn='$isbn', book_type='$book_type', description='$description', publisher='$publisher' WHERE book_id='$book_id'");
			
		}

		public function book_lend(){
			$bookid = htmlspecialchars($_POST['bookid']);
			$reqid = htmlspecialchars($_POST['reqid']);
			$status = $this->db->query("Select book_status from book where book_id='$bookid'")->result();
			$data = array(
			
				'trans_status' => 'PENDING',
				//'due_date' => DATE_ADD(NOW(), INTERVAL 5 DAY),
				'request_id' => $reqid
				
			);

			$this->db->query("Update book set book_status='ON LOAN' where book_id='$bookid'");
			
			$this->db->insert('transaction', $data);
			$this->db->query("Delete from request where request_id='$reqid'");

			//$this->db->query("Update transaction set due_date='DATE_ADD(NOW(), INTERVAL 5 DAY)' where request_id='$reqid'");
			//$this->db->set('date = DATE_ADD(NOW(), INTERVAL 5 DAY)'); 
			
		}

		public function view_all_books()
		{
			return $this->db->query("Select * from book;")->result();
		}

		public function get_book()
		{
			$bookid = htmlspecialchars($_POST['bookid']);
			return $this->db->query("Select * from book where book_id = '$bookid'")->result();
		}

		public function view_all_trans(){
			return $this->db->query("Select * from transaction;")->result();
		}

		public function view_all_requests(){
			$bookid = htmlspecialchars($_POST['bookid']);
			return $this->db->query("Select b.call_no, b.title, b.book_status, r.request_date, r.request_status, u.name, r.request_id, b.book_id, u.library_id from book b, request r, user u where r.book_id = b.book_id and r.library_id = u.library_id and r.book_id=$bookid;")->result(); 
		}

	}

?>