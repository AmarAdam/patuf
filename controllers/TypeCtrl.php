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
	



	}