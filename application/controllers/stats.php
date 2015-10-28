<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stats extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
    	$this->load->model('stat');
	}

	public function index()
	{
		$this->load->view('team_dashboard');
	}

	// public function months()
	// {
	// 	$this->load->view('months');
	// }
   

	public function add_stats()
	{
		if(!isset($total_donation)){
			$total_donation = 0;
		}else{
			$total_donation = $total_donation + $this->input->post('donation');
		}

		$stats_details = array(
                'donation' => $this->input->post('donation'),
                'attendees' => $this->input->post('attendees'),
                'event_id' => $this->input->post('event'),
                'team_id' => $this->input->post('team'),
                'month'=> $this->input->post('month'));
        $add_stats = $this->stat->add_stats($stats_details);
        redirect("/stats");  
	}

	public function show()
  {
		$month_select = array('month'=>$this->input->post('month'));
  	$data_show = array($this->stat->show_stat($month_select));
  
  	$category = array();
		$category['name'] = 'Teams';
		$category['data'] = array();
		
		$series1 = array();
		$series1['name'] = 'Collections'; // Change for Legend Names		

		foreach ($data_show[0] as $row)
		{
		    $category['data'][] = $row['team_name'];
			$series1['data'][] = $row['donation_amount'];
		}
		
		$result = array();
		array_push($result,$category);
		array_push($result,$series1);
		
		print json_encode($result, JSON_NUMERIC_CHECK);
  }

	public function show_events()
	{	
		$event_select = array('event'=>$this->input->post('event'));
  	$data_show = array($this->stat->show_event($event_select));
  
		$category1 = array();
		$category1['name'] = 'Events';
		$category1['data'] = array();
		
		$series2 = array();
		$series2['name'] = 'Collections';
		$series2['data'] = array(); // Change for Legend Names		

		foreach ($data_show[0] as $row)
		{
	    $category1['data'][] = $row['event_name'];
			$series2['data'][] = $row['donation_amount'];
		}
		
		$result1 = array();
		array_push($result1,$category1);
		array_push($result1,$series2);
		
		print json_encode($result1, JSON_NUMERIC_CHECK);
	}
}