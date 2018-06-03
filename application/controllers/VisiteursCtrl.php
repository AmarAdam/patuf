<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class VisiteursCtrl extends CI_Controller{
		
		public function accueil(){
			
			$this->load->database();
			
			$this->load->view('templates/headervisiteurs');
			$this->load->view('templates/footer');

		}

		public function listfield(){
			$this->load->model('my_field');
			$data['field'] = $this->my_field->selectAll();
			$this->load->view('templates/headervisiteurs');
			$this->load->view('pages/visiteurs/list_field',$data);
			$this->load->view('templates/footer');
		}

		public function listmatch(){
			
			$this->load->model('my_match');
			$data['match'] = $this->my_match->selectAll();
			$this->load->view('templates/headervisiteurs');
			$this->load->view('pages/visiteurs/list_match',$data);
			$this->load->view('templates/footer');

		}

		public function listtype(){
			$this->load->model('my_type');
			$data['type'] = $this->my_type->selectAll();
			$this->load->view('templates/headervisiteurs');
			$this->load->view('pages/type/list_type',$data);
			$this->load->view('templates/footer');
		}

		public function listteam(){
			$this->load->model('my_team');
			$data['team'] = $this->my_team->selectAll();
			$this->load->view('templates/headervisiteurs');
			$this->load->view('pages/visiteurs/list_team',$data);
			$this->load->view('templates/footer');

		}

		public function listuser(){
			$this->load->model('my_user');
			$data['user'] = $this->my_user->selectAll();
			$this->load->view('templates/headervisiteurs');
			$this->load->view('pages/visiteurs/list_user',$data);
			$this->load->view('templates/footer');

		}
	




	}