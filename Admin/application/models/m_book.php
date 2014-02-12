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

		public function view_all_books()
		{
			return $this->db->query("Select * from book;")->result();
		}

		public function get_book()
		{
			$bookid = htmlspecialchars($_POST['bookid']);
			return $this->db->query("Select * from book where book_id = '$bookid'")->result();
		}

	}

?>