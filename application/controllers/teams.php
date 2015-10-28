<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teams extends CI_Controller {

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
		$teams = $this->Team->all();
		$newest_teams = $this->Team->newest_teams();
		$latest_team = $this->Team->latest_team();
		$this->load->view('teams', array("teams" =>$teams, "newest_teams"=>$newest_teams,"latest_team"=>$latest_team));
	}

	public function create()
	{
		$this->load->view('new_team');
	}

	public function add()
	{
		$this->Team->create($this->input->post());
		redirect('teams');
	}

	public function profile()
	{
		$this->load->view('team');
	}

}