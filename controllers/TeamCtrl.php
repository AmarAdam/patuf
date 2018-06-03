<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class TeamCtrl extends CI_Controller{

		public function listteam(){
			$this->load->model('my_team');
			$data['team'] = $this->my_team->selectAll();
			$this->load->view('templates/header');
			$this->load->view('pages/team/list_team',$data);
			$this->load->view('templates/footer');

		}

		public function addteam(){

			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

  			$this->load->helper('form');
			$this->load->view('templates/header');
			$this->load->view('pages/team/add_team');}

			else{
				$this->load->view('pages/PageConnexion');
				}
		}


		
		public function createTeam(){
			$this->load->model('my_team');
			$this -> load -> library('form_validation');

			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {
				$data=array(
            	"nameteam"=> htmlspecialchars($_POST['nameteam']),
            	"numbplayer"=> htmlspecialchars($_POST['numbplayer']),
            	"id_type_team" => htmlspecialchars($_POST['id_type_team']),
				);
   				$this->my_team->insert($data);

				$this->load->view('templates/header');
				}
			
			else{
				$this->load->view('pages/PageConnexion');
				}

			}

			

		public function deleteTeam() {
		$this->load->model('my_team');
		$this->load->helper('form');
		$this -> load -> library('form_validation');

		if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

		$id=$_POST['idteam'];
		
		$this->my_team->delete($id);
		header('location: '. site_url("TeamCtrl/listteam/"));
		}
		else{
				$this->load->view('pages/PageConnexion');
				}
			}

		
		public function modifteam() {
		$this->load->model('my_team');
		$this->load->helper('form');
		$this -> load -> library('form_validation');

		if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

		$id=$_POST['idteam'];

		$data=array(
            
            "nameteam"=> htmlspecialchars($_POST['nameteam']),
            "numbplayer"=> htmlspecialchars($_POST['numbplayer']),
            "id_type_team" => htmlspecialchars($_POST['id_type_team']),

			);
		
		$this->my_team->update($id, $data);
		header('location: '. site_url("TeamCtrl/listteam/"));
		}
		else{
				$this->load->view('pages/PageConnexion');
			}
		}







	}