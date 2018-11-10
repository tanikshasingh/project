<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

	

    public function __construct(){
        parent::__construct();

         //load the model  
        $this->load->model('enquiry_model');
		$this->load->helper('form');
	    $this->load->library('form_validation');
	    $this->load->library('session');

    }
	
	public function index()
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $this->form_validation->set_rules('name', 'Name', 'required');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'required|min_length[10]|max_length[10]');
	    $this->form_validation->set_rules('issues', 'Issues', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	    	$data = $this->input->post();
	        $this->load->view('enquiry',$data);
	    }
	    else
	    {
	        $this->enquiry_model->set_news();
	        $this->session->set_flashdata('msg', 'Request submitted successfully.');
	        $this->load->view('enquiry');
	    }
	}
}
