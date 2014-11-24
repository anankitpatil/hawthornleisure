<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pubs extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	
	public function show($id) {
		if($id != FALSE) {
			$query = $this->db->get_where('pubs', array('id' => $id));
			$data['pub'] = $query->row_array();
		  }
		  else {
			return FALSE;
		  }
		$this->load->view('show', $data);
	}
	
	public function add() {
		$this->load->model('pubs_model');
		$data['username'] = $this->tank_auth->get_username();
		$this->load->view('add', $data);
	}
	
	public function add_pub() {
		$this->load->model('pubs_model');
		$this->pubs_model->add_pub();
		$data['username'] = $this->tank_auth->get_username();
		$data['pubs'] = $this->pubs_model->get_pubs();
		$this->load->view('add_pub', $data);
	}
	
	public function ed($id) {
		$this->load->model('pubs_model');
		$pubs = $this->pubs_model->edit_pub($id);
		$data = array('pub' => $pubs);
		$data['username'] = $this->tank_auth->get_username();
		$this->load->view('ed', $data);
	}
	
	public function update_pub() 
	{   
		$this->load->model('pubs_model'); // load the model first
		$this->pubs_model->update_pub();
		$data['username'] = $this->tank_auth->get_username();
		$data['pubs'] = $this->pubs_model->get_pubs();
		$this->load->view('update_pub', $data);
	}
	
	public function delete_pub($id)
	{
		$this->load->model('pubs_model');
		$this->pubs_model->delete_pub($id);
		redirect('/');
	}
	
	public function visible($id)
	{
		$this->load->model('pubs_model');
		$this->pubs_model->visibility($id);
		redirect('/');
	}
	
	public function contact() {
 
		$list = array('rossano@renewdesign.co.uk', 'anankitpatil@gmail.com');//('rachael.nixon@findmypub.com', 'michelle@renewdesign.co.uk');
		$this->load->library('email');
		$this->email->from($this->input->post('email'),$this->input->post('name')); //$this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->reply_to($this->input->post('email'), $this->input->post('name'));
		$this->email->to($list);
		$this->email->subject('Website Enquiry');
		$this->email->message($this->input->post('message'));//$this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message('Hawthorn Leisure Contact Form');//$this->load->view('email/'.$type.'-txt', $data, TRUE));
		/*
		$this->load->library('email');
		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->reply_to($this->input->post('email'), $this->input->post('name'));
		$this->email->to('ankit@renewdesign.co.uk'); 
		$this->email->subject('HL Contact Form');
		$this->email->message($this->input->post('message')); */
		  
		  if($this->email->send()) {
			 echo "<p>We have successfully received your email.<br /> We will Contact you ASAP.</p><p></p>";
		  } else {
		     echo "<p>Some problem occurred.</p>";
		  }   
	}
	
	public function enquire() {
 
 		$list = array('rachael.nixon@findmypub.com', 'michelle@renewdesign.co.uk');
		//$list = array('enquiries@hawthornleisure.com', 'mariefoy@findmypub.com');
		$this->load->library('email');
		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->reply_to($this->input->post('email'), $this->input->post('name'));
		$this->email->to($list);
		$this->email->subject($this->input->post('subject'));
		$this->email->message($this->input->post('message'));
		$this->email->set_alt_message('Hawthorn Leisure Enquiry Request Form');
		  
		  if($this->email->send()) {
			 echo '<p style="color:#CC6600;">We have successfully received your email.<br /> We will Contact you ASAP.</p><p></p>';
		  } else {
		     echo "<p>Some problem occurred.</p>";
		  }   
	}
	
	public function contactsend() {
 
		$list = array('enquiries@hawthornleisure.com', 'rachael.nixon@findmypub.com');
		$this->load->library('email');
		$this->email->from($this->input->post('email'),$this->input->post('name'));
		$this->email->reply_to($this->input->post('email'), $this->input->post('name'));
		$this->email->to($list);
		$this->email->subject('Website Enquiry');
		$this->email->message(nl2br('Name: ' . $this->input->post('name') . PHP_EOL . 'Email: ' . $this->input->post('email') . PHP_EOL . 'Telephone: ' . $this->input->post('phone') . PHP_EOL . 'Message: ' . $this->input->post('message')));
		$this->email->set_alt_message('Hawthorn Leisure Contact Form');
		  if($this->email->send()) {
			 echo "<p>We have successfully received your email.<br /> We will Contact you ASAP.</p><p></p>";
		  } else {
		     echo "<p>Some problem occurred.</p>";
		  }   
	}
	
}

/* End of file pubs.php */
/* Location: ./application/controllers/pubs.php */
?>
