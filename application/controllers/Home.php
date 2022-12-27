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
	
	public function medicalHistory()
	{
		$this->load->view('medical_history');
	}
	public function minorComplaints()
	{
		$this->load->view('minorComplaints');
	}
	public function listOfMedicine()
	{
		$this->load->view('listOfMedicine');
	}
	public function excessRoutine()
	{
		$this->load->view('excessRoutine');
	}
	public function averageEatingPattern()
	{
		$this->load->view('averageEatingPattern');
	}
	public function shortDiscription()
	{
		$this->load->view('shortDiscription');
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
	public function messageSent()
	{
		$this->load->view('messageSent');
	}
	public function messageReceived()
	{
		$this->load->view('messageReceived');
	}
	public function messageSentByPooja()
	{
		$this->load->view('messageSentByPooja');
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
	public function remainingQuota()
	{
		$this->load->view('remainingQuota');
	}
}
