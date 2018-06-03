<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class FieldCtrl extends CI_Controller{
		
		public function accueil($page = 'PageAccueil'){
		
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
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