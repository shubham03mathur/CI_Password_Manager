<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addclient extends CI_Controller {

	function __construct()
	{
	   parent::__construct();
	   $this->load->helper('url');
	}

	function index()
	{
	   $this->load->helper(array('form'));
	   $this->load->view('add_client');
	}

}

?>