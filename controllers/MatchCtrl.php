<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MatchCtrl extends CI_Controller{

		public function listmatch(){
			
			$this->load->model('my_match');
			$data['match'] = $this->my_match->selectAll();
			$this->load->view('templates/header');
			$this->load->view('pages/match/list_match',$data);
			$this->load->view('templates/footer');

		}

		public function addmatch(){
			
			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

			$this->load->helper('form');
			$this->load->view('templates/header');
			$this->load->view('pages/match/add_match');
  			}
  			
  			else{
				$this->load->view('pages/PageConnexion');
				}
		}
		

		
		public function createMatch(){
			$this->load->model('my_match');
			$this -> load -> library('form_validation');

			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {
			
			$data=array(
            "idfield"=> htmlspecialchars($_POST['idfield']),
            "idteam1" => htmlspecialchars($_POST['idteam1']),
            "idteam2"=> htmlspecialchars($_POST['idteam2']),
            "datematch" => htmlspecialchars($_POST['datematch']),
			);
   			$this->my_match->insert($data);

			$this->load->view('templates/header');
			}
			else{
				$this->load->view('pages/PageConnexion');
				}
			}
			
			
		public function deleteMatch() {
			$this->load->model('my_match');
			$this->load->helper('form');
			$this -> load -> library('form_validation');

			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {
		
			$id=$_POST['idmatch'];
		
			$this->my_match->delete($id);
			header('location: '. site_url("MatchCtrl/listmatch/"));
			}

			else{
				$this->load->view('pages/PageConnexion');
				}
			}
			


		

			


			



	}