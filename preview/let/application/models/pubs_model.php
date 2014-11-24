<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Pubs
 *
 * This model represents Pubs data
 *
 */
class Pubs_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_pubs() {
		$this->db->select('*');
		$this->db->from('pubs');
		$this->db->order_by('date_modified', 'DESC');
		$query = $this->db->get();
        return $query->result();
	}
	
	public function show($id) {
		if($id != FALSE) {
			$query = $this->db->get_where('pubs', array('id' => $id));
			return $query->row_array();
		  }
		  else {
			return FALSE;
		  }	
	}

}

/* End of file pubs.php */
/* Location: ./application/models/pubs.php */