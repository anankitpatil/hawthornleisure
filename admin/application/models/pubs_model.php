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
		$this->load->library('session');
        if (!$this->tank_auth->is_logged_in()) {
            // save the visitors entry point and redirect to login
            $this->session->set_userdata('redirect', $this->uri->uri_string());
            redirect('auth/login');
        }
	}

	/**
	 * Get user record by Id
	 *
	 * @param	int
	 * @param	bool
	 * @return	object
	 */
	
	public function get_pubs() {
		$this->db->select('*');
		$this->db->from('pubs');
		$this->db->order_by('date_modified', 'DESC');
		$query = $this->db->get();
        return $query->result();
	}
	
	public function add_pub()
	{	
		$this->load->library('upload');
		
		$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|txt';
 
		$filename = array();
	
		for($i=1;$i<=6;$i++)
		   { 
			 if(isset($_FILES['image_link_'.$i])) {
				 $path = rand(pow(10, 5), pow(10, 6)-1);
				 $config['upload_path'] = './uploads/'.$path.'/';
				 mkdir('./uploads/'.$path.'/', 0777, TRUE);
				 $this->upload->initialize($config); 
				 if ($this->upload->do_upload('image_link_'.$i)) {
			         $upload_data = $this->upload->data();
				     $filename['image_link_'.$i] = '/'.$path.'/'.$upload_data['file_name'];
					 
					 $config2 = array(
						'source_image' => $upload_data['full_path'],
						'new_image' => './uploads/'.$path.'/thumb/',
						'maintain_ratio' => TRUE,
						'height' => 100,
						'width' => 200
					);
					mkdir('./uploads/'.$path.'/thumb/', 0777, TRUE);
					$this->load->library('image_lib', $config2);
        			$this->image_lib->resize();
				 } else {
					 $data['alert'] = $this->upload->display_errors();
				  	 //$filename['image_link_'.$i] = $data['alert'];
					 $filename['image_link_'.$i] = '0';
				 }
			 } else { $filename['image_link_'.$i] = '0'; }
		  }
		
		$data = array(
			'name'=>$this->input->post('name'),
			'reference_number'=>$this->input->post('reference_number'),
			'status'=>$this->input->post('status'),
			'address_line_1'=>$this->input->post('address_line_1'),
			'address_line_2'=>$this->input->post('address_line_2'),
			'address_line_3'=>$this->input->post('address_line_3'),
			'postcode'=>$this->input->post('postcode'),
			'feat_beer' => ($this->input->post('feat_beer') === FALSE) ? 0 : 1,
			'feat_external' => ($this->input->post('feat_external') === FALSE) ? 0 : 1,
			'feat_catering' => ($this->input->post('feat_catering') === FALSE) ? 0 : 1,
			'feat_external' => ($this->input->post('feat_external') === FALSE) ? 0 : 1,
			'feat_function' => ($this->input->post('feat_function') === FALSE) ? 0 : 1,
			'feat_team' => ($this->input->post('feat_team') === FALSE) ? 0 : 1,
			'feat_pool' => ($this->input->post('feat_pool') === FALSE) ? 0 : 1,
			'feat_car' => ($this->input->post('feat_car') === FALSE) ? 0 : 1,
			'feat_restaurant' => ($this->input->post('feat_restaurant') === FALSE) ? 0 : 1,
			'feat_sky' => ($this->input->post('feat_sky') === FALSE) ? 0 : 1,
			'feat_live' => ($this->input->post('feat_live') === FALSE) ? 0 : 1,
			'feat_letting' => ($this->input->post('feat_letting') === FALSE) ? 0 : 1,
			'feat_smoking' => ($this->input->post('feat_smoking') === FALSE) ? 0 : 1,
			'description'=>$this->input->post('description'),
			'property_features'=>$this->input->post('property_features'),
			'trading_style'=>$this->input->post('trading_style'),
			'accomodation'=>$this->input->post('accomodation'),
			'investment'=>$this->input->post('investment'),
			'investment_desc'=>$this->input->post('investment_desc'),
			'rent'=>$this->input->post('rent'),
			'agreement'=>$this->input->post('agreement'),
			'image_link_1'=>$filename['image_link_1'],
			'image_link_2'=>$filename['image_link_2'],
			'image_link_3'=>$filename['image_link_3'],
			'image_link_4'=>$filename['image_link_4'],
			'image_link_5'=>$filename['image_link_5'],
			'image_link_6'=>$filename['image_link_6'],
			'user'=>$this->tank_auth->get_username()
		);
		
		$this->db->set('date_modified', 'NOW()', FALSE);
		$this->db->insert('pubs',$data);
	}
	
	public function edit_pub($id)
	{
		if($id != FALSE) {
			$query = $this->db->get_where('pubs', array('id' => $id));
			return $query->row_array();
		  }
		  else {
			return FALSE;
		  }
	}
	
	public function delete_pub($id)
	{
		$this->db->delete('pubs', array('id' => $id));
	}
	
	public function visibility($id)
	{
		$this->db->where('id', $id);
		$q = $this->db->get('pubs');
		$s = $q->result_array();
		
		if($s[0]['draft'] == 0) {
			$data = array('draft'=>1);
			$this->db->where('id', $id);
			$this->db->update('pubs', $data);	
		} else {
			$data = array('draft'=>0);
			$this->db->where('id', $id);
			$this->db->update('pubs', $data);
		}
	}
	
	public function update_pub()
	{	
		$this->load->library('upload');
		
		$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|txt';
 
		$filename = array();
	
		for($i=1;$i<=6;$i++)
		   { 
			 if(isset($_FILES['image_link_'.$i])) {
				 $path = rand(pow(10, 5), pow(10, 6)-1);
				 $config['upload_path'] = './uploads/'.$path.'/';
				 mkdir('./uploads/'.$path.'/', 0777, TRUE);
				 $this->upload->initialize($config); 
				 if ($this->upload->do_upload('image_link_'.$i)) {
			         $upload_data = $this->upload->data();
				     $filename['image_link_'.$i] = '/'.$path.'/'.$upload_data['file_name'];
					 
					 $config2 = array(
						'source_image' => $upload_data['full_path'],
						'new_image' => './uploads/'.$path.'/thumb/',
						'maintain_ratio' => TRUE,
						'height' => 100,
						'width' => 200
					);
					mkdir('./uploads/'.$path.'/thumb/', 0777, TRUE);
					$this->load->library('image_lib', $config2);
        			$this->image_lib->resize();
				 } else {
					 $data['alert'] = $this->upload->display_errors();
				  	 $filename['image_link_'.$i] = $data['alert'];
					 $filename['image_link_'.$i] = $this->input->post('image_link_'.$i);
					 //$filename['image_link_'.$i] = '0';
				 }
			 } else { $filename['image_link_'.$i] = $this->input->post('image_link_'.$i); }
		  }
		
		$data = array(
			'id'=>$this->input->post('id'),
			'name'=>$this->input->post('name'),
			'reference_number'=>$this->input->post('reference_number'),
			'status'=>$this->input->post('status'),
			'address_line_1'=>$this->input->post('address_line_1'),
			'address_line_2'=>$this->input->post('address_line_2'),
			'address_line_3'=>$this->input->post('address_line_3'),
			'postcode'=>$this->input->post('postcode'),
			'feat_beer' => ($this->input->post('feat_beer') === FALSE) ? 0 : 1,
			'feat_external' => ($this->input->post('feat_external') === FALSE) ? 0 : 1,
			'feat_catering' => ($this->input->post('feat_catering') === FALSE) ? 0 : 1,
			'feat_external' => ($this->input->post('feat_external') === FALSE) ? 0 : 1,
			'feat_function' => ($this->input->post('feat_function') === FALSE) ? 0 : 1,
			'feat_team' => ($this->input->post('feat_team') === FALSE) ? 0 : 1,
			'feat_pool' => ($this->input->post('feat_pool') === FALSE) ? 0 : 1,
			'feat_car' => ($this->input->post('feat_car') === FALSE) ? 0 : 1,
			'feat_restaurant' => ($this->input->post('feat_restaurant') === FALSE) ? 0 : 1,
			'feat_sky' => ($this->input->post('feat_sky') === FALSE) ? 0 : 1,
			'feat_live' => ($this->input->post('feat_live') === FALSE) ? 0 : 1,
			'feat_letting' => ($this->input->post('feat_letting') === FALSE) ? 0 : 1,
			'feat_smoking' => ($this->input->post('feat_smoking') === FALSE) ? 0 : 1,
			'description'=>$this->input->post('description'),
			'property_features'=>$this->input->post('property_features'),
			'trading_style'=>$this->input->post('trading_style'),
			'accomodation'=>$this->input->post('accomodation'),
			'investment'=>$this->input->post('investment'),
			'investment_desc'=>$this->input->post('investment_desc'),
			'rent'=>$this->input->post('rent'),
			'agreement'=>$this->input->post('agreement'),
			'image_link_1'=>$filename['image_link_1'],
			'image_link_2'=>$filename['image_link_2'],
			'image_link_3'=>$filename['image_link_3'],
			'image_link_4'=>$filename['image_link_4'],
			'image_link_5'=>$filename['image_link_5'],
			'image_link_6'=>$filename['image_link_6'],
			'user'=>$this->tank_auth->get_username()
		);
		
		$id = $data['id'];
		
		$this->db->set('date_modified', 'NOW()', FALSE);
		$this->db->where('id',$id);
		$this->db->update('pubs', $data);
	}
	
}

/* End of file pubs.php */
/* Location: ./application/models/pubs.php */