<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chats extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->session->set_userdata('logged_in', TRUE);
		$this->load->model('chat_model');
		// $this->output->enable_profiler();
		// $this->session->sess_destroy();

		$this->view_data['thread_id'] = 1;
		$this->view_data['user_id'] = 1;
		$this->session->set_userdata('user_id', 1);
	}

	public function index()
	{
		// Check if logged in
		if(!$this->session->userdata('logged_in'))
		{
			redirect('/users/login');
		}
		else
		{
			redirect('/chats/home');
		}
	}

	public function home()
	{
		$this->load->view('chats/home', $this->view_data);
	}

	public function new_message()
	{
		$this->load->view('chats/new', $this->view_data);
	}

	public function message_thread()
	{
		$this->load->view('chats/chat-new', $this->view_data);
	}

	function ajax_add_message_thread()
	{
		// User id, message title, message body content, message recipients sent to chat model
		$user_id = $this->session->userdata('user_id');
		$priority = $this->input->post('priority');
		$title = $this->input->post('title');
		$body = $this->input->post('body');
		$recipients = $this->input->post('recipients');
		$this->chat_model->add_message_thread($user_id, $priority, $title, $body, $recipients);
	}

	function ajax_add_chat_message()
	{
		$user_id = $this->session->userdata('user_id');
		$thread_id = $this->input->post('thread_id');
		$priority = $this->input->post('priority');
		$body = $this->input->post('body');
		$recipients = $this->input->post('recipients');
		$this->chat_model->add_chat_message($user_id, $thread_id, $priority, $body, $recipients);
		
	}

	function ajax_get_chat_messages()
	{
		$thread_id = $this->input->post('thread_id');
		$messages = $this->chat_model->get_chat_messages($thread_id);

		if($messages->num_rows() > 0)
		{
			// Have some chats, return it
			$messages_html = '<ul>';

			foreach($messages->result() as $message)
			{
				$messages_html .= '<li>' . $message->message_body . '</li>';
			}

			$messages_html .= '</ul>';

			$result = array('status' => 'ok', 'content' => $messages_html);

			echo json_encode($result);
		}
		else
		{
			$result = array('status' => 'ok', 'content' => '');

			echo json_encode($result);
		}
	}

}