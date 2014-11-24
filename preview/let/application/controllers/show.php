<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($id)
	{
		$this->load->model('pubs_model');
		$data['pub'] = $this->pubs_model->show($id);
		$this->load->view('show', $data);
	}
	
}

/* End of file let.php */
/* Location: ./application/controllers/let.php */