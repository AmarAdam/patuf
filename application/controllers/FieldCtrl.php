<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class FieldCtrl extends CI_Controller{
		
		public function accueil($page = 'PageAccueil'){
		
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
		}

		public function addfield(){

			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

  			$this->load->helper('form');
			$this->load->view('templates/header');
			$this->load->view('pages/field/add_field');}

			else{
				$this->load->view('pages/PageConnexion');
				}
		}

		public function createField(){
			$this->load->model('my_field');
			$this -> load -> library('form_validation');

			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {
				
				$data=array(
            	"namefield"=> htmlspecialchars($_POST['namefield']),
            	"adressefield"=> htmlspecialchars($_POST['adressefield']),
				);
   				$this->my_field->insert($data);

				$this->load->view('templates/header');
				}
			
			else{
				$this->load->view('pages/PageConnexion');
				}

			}



		public function listfield(){
			$this->load->model('my_field');
			$data['field'] = $this->my_field->selectAll();
			$this->load->view('templates/header');
			$this->load->view('pages/field/list_field',$data);
			$this->load->view('templates/footer');
		}
	



	}
