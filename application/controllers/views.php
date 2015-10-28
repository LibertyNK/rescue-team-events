<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*************************************************************************
* WARNING:	All page links are routed through this controller.
*			The purpose of this controller is so even when we add, 
*			delete, or modify existing controllers or controller
*			methods, we won't have to change the hrefs (hyperlinks) 
*			pointing to them as long as everything is routed
*			correctly through this central controller. Each and every link
*			throughout our website should point to one of these functions.
*			
*		   	As you'll see below, you can either (1) load views directly
*			or (2) redirect to the appropriate method from this file.
*			Whenever adding/modifying ANY view file, make sure any
*			links point to the correct method in this view.
*
*			With the exception of the index method, if your function
*			is more than 2 lines long, YOU ARE WRONG. Place a redirect
*			in the function and write your code in a separate controller. 
*			
*************************************************************************/

class Views extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('logged_in') === TRUE)
		{
			redirect('/views/dashboard');
		}
		else 
		{
			$this->load->view('index');
		}
	}

/**************** PAGE LINKS - ALPHABETICAL ORDER ****************/
	public function about()
	{
		$this->load->view('index');
	}
	public function admin()
	{
		redirect('/users/admin');
	}
	public function approve($id)
	{
		redirect('/users/approve/'.$id);
	}
	public function create_event()
	{
		redirect('/events/create');
	}
	public function dashboard()
	{
		$this->load->view('team_dashboard');
	}
	public function edit($id)
	{
		redirect('/users/edit/'.$id);
	}
	public function event()
	{
		$this->load->view('event');
	}
	public function events()
	{
		redirect('/events');
	}
	public function leader_dashboard()
	{
		$this->load->view('leader_dashboard');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	public function profile($id)
	{
		redirect('/users/profile/'.$id);
	}
	public function messages()
	{
		redirect('/chats/home');
	}
	public function request()
	{
		redirect('/users/request');
	}
	public function signin()
	{
		redirect('/users/signin');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function teams()
	{
		redirect('/teams');
	}
	
}
