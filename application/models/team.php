<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Team extends CI_Model {

  public function all()
  {
    return $this->db->query("SELECT * FROM teams")->result_array();
  }
  public function newest_teams()
  {
    return $this->db->query("SELECT * FROM teams ORDER BY id DESC LIMIT 10")->result_array();
  }

  public function latest_team()
  {
    return $this->db->query("SELECT * FROM teams ORDER BY id DESC LIMIT 1")->row_array();
  }

  public function create($event)
  {
    // $query_1 = "INSERT INTO teams (name, description, coordinates, date_of_event, location, created_at, updated_at) VALUES (?,?,?,?,?,NOW(), NOW())";
    // $values_1 = array($event['name'],$event['description'],$event['coordinates'],$event['date_of_event'],$event['location']);
    // $this->db->query($query_1, $values_1);

    // $event_id = $this->db->insert_id();
    // $query_2 = "INSERT INTO teams_events (team_id, event_id, created_at, updated_at) VALUES (?,?,NOW(), NOW())";
    // $values_2 = array($event['team_id'],$event_id);
    // $this->db->query($query, $values_2);
  }
  
  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('teams');
  }

}