<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('User');
		$this->load->model('Team');
		$this->load->model('Event');
		$this->load->library('session');
	}

	public function index()
	{
		$events = $this->Event->all();
		$this->load->view('events', array("events" =>$events));
	}

	public function create()
	{
		$this->load->view('new_event');
	}

	public function add()
	{
		$this->Event->create($this->input->post());
		redirect('events');
	}


}