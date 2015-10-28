$(document).ready(function(){

	// New thread
	// $("a#submit_message").click(function() {

	// 	var chat_message_content = $("input#chat_message").val();
	// 	if (chat_message_content == "") {return false;}

	// 	$.post('/chats/ajax_add_message_thread', { body : chat_message_content, priority : priority, title : title, recipients : recipients }, function(data) {

	// 		alert(data);
		
	// 	}, 'json');

	// 	return false;
	// });

	// New message
	$("a#submit_message").click(function(e) {
		// Prevent hyperlink from executing
		e.preventDefault();

		var chat_message_content = $("input#chat_message").val();
		if (chat_message_content == "") { return false; } // stop executing

		console.log(chat_message_content);

		$.post(base_url + 'chats/ajax_add_chat_message', { body : chat_message_content, priority : priority, thread_id : thread_id, recipients : recipients }, function(data) {
			console.log("clicked!");
			alert(data);
		
		}, 'json');

		return false;
	});

	// Retrieve messages in message thread
	function get_chat_messages()
	{
		console.log(thread_id);

		$.post(base_url + 'chats/ajax_get_chat_messages', { thread_id : thread_id }, function(data) {
			console.log(thread_id);

			if(data.status == 'ok') 
			{
				$('div#thread-body').html(data.content);
			}
			else
			{
				// There was a problem, do something...
			}

		}, 'json');

	};

	get_chat_messages();

});