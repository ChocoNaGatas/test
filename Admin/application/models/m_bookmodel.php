<?php

class Bookmodel extends CI_Model{
	
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

		//insert query here
	}

}

