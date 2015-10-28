<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

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
		if($this->session->userdata('logged_in') === TRUE)
		{
			redirect('/users/dashboard');
		}
		else 
		{
			$this->load->view('index');
		}
	}
	public function signin()
	{
		$login = $this->User->login($this->input->post());
		if ($login)
		{
			$user = $this->User->get_user_by_email($this->input->post('email'));
			$this->session->set_userdata($user);
			$this->session->set_userdata('user_level', $user['user_level']);
		
			// Sarah and admin
			if($user['user_level'] == 1)
			{
				redirect('/users/admin');
			}
			else if($user['user_level'] != 5)
			{
				redirect('/users/teams');			
			}
		}
		else
		{
			redirect('/');
		}
	}
	public function request()
	{
		$request = $this->User->create($this->input->post());
		if ($request)
		{
			$this->load->view('thank_you');			
		}
		else 
		{
			redirect('/');
		}
	}
	public function approve($id)
	{
		$this->User->approve($id);
		redirect('/users/admin');
	}
	public function edit($id)
	{
		$user = $this->User->find($id);
		$this->load->view('edit', array('user'=> $user));
	}
	public function profile($id)
	{
		$user = $this->User->find($id);
		$this->load->view('profile', array("user"=> $user));
	}
	public function admin()
	{
		$requests = $this->User->pending_requests();
		$this->load->view('admin_dashboard', array("requests"=> $requests));
	}
}

//end of main controller