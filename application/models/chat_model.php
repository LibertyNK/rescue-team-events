<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    date_default_timezone_set('America/Los_Angeles');
  }

  /**
   * Send a New Message (Thread)
   * This method adds a new thread and the first message in that thread (sent from the thread creator), along with the participants (the sender + all the people sent to)
   *
   * @param   integer  $sender_id
   * @param   mixed    $recipients  A single integer or an array of integers
   * @param   string   $message_title
   * @param   string   $message_body
   * @param   integer  $priority
   * @return  integer  $thread_id
   */
  // TODO:
  // 1. Add validations
  // 
  function add_message_thread($sender_id, $priority, $message_title, $message_body, $recipients)
  {
  	// Multiple inserts being performed
  	$this->db->trans_start();
  	
  	// Insert new message thread
  	$thread_values = array(
  			'subject' => $message_title, 
  			'created_by' => $sender_id
		);
  	$this->db->insert('msg_threads', $thread_values);
  	$thread_id = $this->db->insert_id();
  	
  	// Insert new message
  	$message_values = array(
  			'thread_id' => $thread_id,
  			'message_body' => $message_body,
  			'priority' => $priority,
  			'sender_id' => $sender_id
  	);
  	$this->db->insert('msg_messages', $message_values);
  	$message_id = $this->db->insert_id();
  	
  	// Insert all message participants
  	// Insert message sender first
  	$participant_values = array(
  			'sender_id' => $sender_id, 
  			'thread_id' => $thread_id
		);
		$this->db->insert('msg_participants', $participant_values);	

  	// Insert each recipient
  	foreach($recipients as $recipient) {
  		$participant_values = array(
  			'sender_id' => $recipient, 
  			'thread_id' => $thread_id
			);
			$this->db->insert('msg_participants', $participant_values);		
  	}
  	// Inserts complete
  	$this->db->trans_complete();
  }


  /**
   * Add a new message to an existing thread
   * This method adds a new message to an existing message thread (identified by the thread_id parameter) - updates the messages table.
   *
   * @param   integer  $sender_id
   * @param   integer  $thread_id
   * @param   integer  $priority
   * @param   string   $message_body
   * @param   mixed    $recipients  A single integer or an array of integers
   */
  // TODO:
  // 1. Add validations?
  // 
  function add_chat_message($sender_id, $thread_id, $priority, $message_body, $recipients)
  {
    // Insert new message
    $message_values = array(
        'thread_id' => $thread_id,
        'message_body' => $message_body,
        'priority' => $priority,
        'sender_id' => $sender_id
    );
    $this->db->insert('msg_messages', $message_values);
    $message_id = $this->db->insert_id();
  }


  /**
   * Retrieves all messages related to a certain thread, identified by thread_id.
   * Returns an array of messages, joined with participant names and dates of msg
   *
   * @param   integer $thread_id
   * @return  mixed   $result     Array of messages and associated data
   */
  function get_chat_messages($thread_id)
  {
    $query = "SELECT 
              m.sender_id,
              m.message_body,
              DATE_FORMAT(m.created_at, '%D of %M %Y at %H:%i:%s') AS chat_created_at,
              CONCAT(u.first_name, ' ', u.last_name) AS user_name
              FROM msg_messages m
              JOIN users u ON m.sender_id = u.id
              WHERE m.thread_id = ?";

    $result = $this->db->query($query, $thread_id);

    return $result;
  }

}

