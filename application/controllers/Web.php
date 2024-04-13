<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function custom_404()
	{
		$this->load->view('web/header');
		$this->load->view('web/custom_404');
		$this->load->view('web/footer');
	}

	public function index()
	{
		$this->load->view('web/header');
		$this->load->view('web/index');
		$this->load->view('web/footer');
	}

	public function makeup_artist()
	{
		$this->load->view('web/header');
		$this->load->view('web/makeup_artist');
		$this->load->view('web/footer');
	}

	public function hair_stylist()
	{
		$this->load->view('web/header');
		$this->load->view('web/hair_stylist');
		$this->load->view('web/footer');
	}

	public function nail_technician()
	{
		$this->load->view('web/header');
		$this->load->view('web/nail_technician');
		$this->load->view('web/footer');
	}

	public function beauty_therapy()
	{
		$this->load->view('web/header');
		$this->load->view('web/beauty_therapy');
		$this->load->view('web/footer');
	}

	public function cosmetology()
	{
		$this->load->view('web/header');
		$this->load->view('web/cosmetology');
		$this->load->view('web/footer');
	}

	public function about_us()
	{
		$this->load->view('web/header');
		$this->load->view('web/about_us');
		$this->load->view('web/footer');
	}

	public function verticals()
	{
		$this->load->view('web/header');
		$this->load->view('web/verticals');
		$this->load->view('web/footer');
	}

	public function partner_with_us()
	{
		$this->load->view('web/header');
		$this->load->view('web/partner_with_us');
		$this->load->view('web/footer');
	}

	public function contact_us()
	{
		$this->load->view('web/header');
		$this->load->view('web/contact_us');
		$this->load->view('web/footer');
	}

	public function contact_submit()
	{
		// print_r($_POST);
		$this->db->insert('conatct', $_POST);
		redirect('/', 'refresh');
	}

	public function landing()
	{
		$this->load->view('web/header');		
		$this->load->view('web/landing');
		$this->load->view('web/footer');
	}

	public function landing_submit()
	{
		$this->db->insert('contact', $_POST);
		echo '<script>alert("We appreciate you contacting us. One of our colleagues will get back in touch with you soon! Have a great day!");</script>';
		$this->load->view('web/header');		
		$this->load->view('web/landing');
		$this->load->view('web/footer');
	}

	public function privacy_policy()
	{
		$this->load->view('web/header');		
		$this->load->view('web/privacy_policy');
		$this->load->view('web/footer');
	}
	
	public function terms_and_conditions()
	{
		$this->load->view('web/header');		
		$this->load->view('web/terms&conditions');
		$this->load->view('web/footer');
	}

	public function certificate()
	{
		$this->load->view('web/header');		
		$this->load->view('web/certificate');
		$this->load->view('web/footer');
	}


}
