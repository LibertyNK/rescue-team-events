<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stat extends CI_Model {

	public function add_stats($post){
    	$this->load->library("form_validation");
        $this->form_validation->set_rules("donation", "Donation", "trim|required|numeric");
        $this->form_validation->set_rules("attendees", "Attendees", "trim|required|numeric");
         $this->form_validation->set_rules("team", "Team", "required");
          $this->form_validation->set_rules("event", "Events", "required");
           $this->form_validation->set_rules("month", "Months", "trim|required|alpha");
        $this->form_validation->set_error_delimiters(' ', ' ');
            if($this->form_validation->run() === FALSE){
                    $this->session->set_flashdata('stats_error', validation_errors());
                    redirect('/');
            }else{
				    $query = "INSERT into statistics(donation_amount, number_of_attendees, event_name, team_name, month, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())";
				    $values = array($post['donation'], $post['attendees'], $post['event_id'], $post['team_id'], $post['month']);
				    return $this->db->query($query,$values);
				}
			}


	public function show_stat($post){
		   $query = "SELECT donation_amount, team_name FROM statistics WHERE month = ?"; 
		   $values = array($post['month']);
        return $this->db->query($query, $values)->result_array();
     }

     	public function show_event($post){
		   $query = "SELECT donation_amount, event_name FROM statistics where event_name = ?"; 
		   $values = array($post['event']);
        return $this->db->query($query, $values)->result_array();
     }
}
