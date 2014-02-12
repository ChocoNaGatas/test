<?php

class M_search extends CI_Model{

	function search_books($search_term='default')
	{
		$this->db->select('*');
		$this->db->from('book');
		$this->db->like('title',$search_term);
		// Execute the query.
		$query = $this->db->get();
		return $query->result_array();
	}
	
}
