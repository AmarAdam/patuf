<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ContactCtrl extends CI_Controller{
		
		public function contact(){

			$this->load->view('templates/header');
			$this->load->view('pages/Contact');
			$this->load->view('templates/footer');

		}


		
	}
