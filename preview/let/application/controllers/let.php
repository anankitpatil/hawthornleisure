<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Let extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->model('pubs_model');
		$pubs = $this->pubs_model->get_pubs();
		$data = array('pubs' => $pubs);
		$this->load->view('welcome', $data);
	}
	/*
	public function show($id)
	{
		$this->load->model('pubs_model');
		$pubs = $this->pubs_model->show($id);
		$data = array('pub' => $pubs);
		$this->load->view('show', $data);
	}
	*/
	
}

/* End of file let.php */
/* Location: ./application/controllers/let.php */