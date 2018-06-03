<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class TypeCtrl extends CI_Controller{
		
		public function accueil($page = 'PageAccueil'){
		
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
		}


		public function listtype(){
			$this->load->model('my_type');
			$data['type'] = $this->my_type->selectAll();
			$this->load->view('templates/header');
			$this->load->view('pages/type/list_type',$data);
			$this->load->view('templates/footer');
		}

		public function addtype(){

            if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

            $this->load->helper('form');
            $this->load->view('templates/header');
            $this->load->view('pages/type/add_type');}

            else{
                $this->load->view('pages/PageConnexion');
                }
        }

		public function createType(){
			$this->load->model('my_type');
			$this -> load -> library('form_validation');

			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {
				$data= htmlspecialchars($_POST['nomtype']);
   				$this->my_type->insert($data);

				$this->load->view('templates/header');
				}
			
			else{
				$this->load->view('pages/PageConnexion');
				}

			}
	



	}
