<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
	   parent::__construct();
	   $this->load->helper('url');
	}

	function index()
	{
	   $this->load->helper(array('form'));
	   $this->load->view('home_view');
	}

}

?>