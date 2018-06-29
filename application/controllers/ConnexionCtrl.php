<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ConnexionCtrl extends CI_Controller{
		
		public function accueil($page = 'PageAccueil'){
		
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$this->load->database();

			$data['title'] = ucfirst($page);
			
			$this->load->view('pages/PageConnexion');

		}

		public function tentativeconnexion(){

		$this->load->helper('cookie');
        $this->load->model('My_admin');
		$this->load->helper('form');
		$this->load-> library('form_validation');

		$data=array(
			"pseudoadmin"=> htmlspecialchars($_POST['pseudoadmin']),
            "passwordadmin"=> htmlspecialchars($_POST['passwordadmin']),
        	);
		$login=$_POST['pseudoadmin'];
        
        $isAdmin = $this->My_admin->verifadmin($data);
        
        if($isAdmin){

       	setcookie('login',crypt($login,'md5'),time()+3600,'/','');
		$this->load->view('templates/header');
        
        }
        
        else{
            $this->load->view('pages/PageConnexion');
        }
    }
		
    	public function addadmin(){
            
            $this->load->view('templates/header');
			$this->load->view('pages/admin/add_admin');
      
        }
    
    	public function createadmin(){
			
			$this->load->helper('cookie');
        	$this->load->model('My_admin');
			$this->load->helper('form');
			$this->load-> library('form_validation');			
			
			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

				$data=array(
            	"pseudoadmin"=> htmlspecialchars($_POST['pseudoadmin']),
            	"passwordadmin"=> htmlspecialchars($_POST['passwordadmin']),
            	);
   			
   				$this->My_admin->insert($data);			
				$this->load->view('templates/header');
			}

			else{
				$this->load->view('pages/PageConnexion');
				}
			}
		
	public function deleteadmin() {

		$this->load->model('my_admin');
		$this->load->helper('form');
		$this -> load -> library('form_validation');

		if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

		$id=$_POST['pseudoadmin'];
		
		$this->my_admin->delete($id);
		}
		else{
			$this->load->view('pages/PageConnexion');
			}
		}
			
			




}	
