<?php

class M_Bookmodel extends CI_Model{
	
	public function insert_to_db(){
		$callno = $_POST['callno'];
		$title = $_POST['title'];
		$author = $_POST['author'];
		$isbn = $_POST['isbn'];
		$booktype = $_POST['booktype'];
		$desc = $_POST['desc'];
		$bookstatus = $_POST['bookstatus'];
		$editor = $_POST['editor'];
		$publisher = $_POST['publisher'];

		//insert query
		$this->db->query("Insert into 'book'(call_no, title, author, isbn, book_type, description, book_status, editor, publisher) values ('$callno', '$title', '$author', '$isbn', '$booktype', '$desc', '$bookstatus', '$editor', '$publisher')");
		$this->load->view('formsuccess');

}

?>