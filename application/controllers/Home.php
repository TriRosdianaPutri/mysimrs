<?php

/**
* 
*/
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['title']="Home Page";
		$data['welcome']= "<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href='user_guide/'>User Guide</a>.</p>";

		$this->load->view('viewhome',$data);
	}
}