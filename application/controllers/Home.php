<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function userprofile()
	{
		$this->load->view('userprofile');
	}
	public function completeReport()
	{
		$this->load->view('complete_report');
	}
	public function subscriptionDetails()
	{
		$this->load->view('subscriptionDetails');
	}
	public function weightCheck()
	{
		$this->load->view('weightCheck');
	}
	public function viewVitamins()
	{
		$this->load->view('viewVitamins');
	}
	public function viewDiet()
	{
		$this->load->view('viewDiet');
	}
	public function messages()
	{
		$this->load->view('messages');
	}
	public function whatsappChats()
	{
		$this->load->view('whatsappChats');
	}
	public function postFeedback()
	{
		$this->load->view('postFeedback');
	}
	public function foodDiary()
	{
		$this->load->view('foodDiary');
	}
}
