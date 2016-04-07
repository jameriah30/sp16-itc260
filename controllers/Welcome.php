<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
        //associative array of data to pass to view
		$data['title'] = "My Unique Title Tag!";
        $data['pade_id'] = "My Clever Page ID!";

        $data['guts'] = '<p>I am the cream filling on the inside.</p>'
        //data is passed as second parameter in view creation
		$this->load->view('welcome_message',$data);
	}
}
