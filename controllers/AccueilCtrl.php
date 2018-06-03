<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class AccueilCtrl extends CI_Controller{
		
		public function accueil($page = 'PageAccueil'){
		
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$this->load->database();

			$data['title'] = ucfirst($page);
			
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');

		}
  

  			public function test(){
			$this->load->model('my_user');
			$data['user'] = $this->my_user->getLastUserId();
			$this->load->view('templates/header');
			$this->load->view('pages/test',$data);
		}	
		

		
	}