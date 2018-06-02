<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersCtrl extends CI_Controller {


	public function index()
	{
	  $data['user'] = $this->player_model->selectAll();
    $this->load->view('player/list_player', $data);
	}

	public function userinfo($id){
		 	
		 	$data['user'] = $this->player_model->selectById($id);
			$this->load->view('templates/header');
			$this->load->view('player/info_user', $data);
			$this->load->view('templates/footer');

		}

	public function listuser(){
			$this->load->model('my_user');
			$data['user'] = $this->my_user->selectAll();
			$this->load->view('templates/header');
			$this->load->view('pages/user/list_user',$data);
			$this->load->view('templates/footer');

		}

	public function adduser(){

			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {
			$this->load->helper('form');
			$this->load->view('templates/header');
			$this->load->view('pages/user/add_user');
			}
			else{
			$this->load->view('pages/PageConnexion');

			}
		}

	public function createuser(){
			
			$this->load->model('my_user');
			$this -> load -> library('form_validation');

			
			if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

			$data=array(
            "pseudouser"=> htmlspecialchars($_POST['pseudouser']),
            "ageuser"=> htmlspecialchars($_POST['ageuser']),
            "emailuser" => htmlspecialchars($_POST['emailuser']),
            "idteam" => htmlspecialchars($_POST['idteam']),

			);
   			
   			$this->my_user->insert($data);			
			$this->load->view('templates/header');
			}
			else{
			$this->load->view('pages/PageConnexion');
			}
		}

	
	public function deleteuser() {

		$this->load->model('my_user');
		$this->load->helper('form');
		$this -> load -> library('form_validation');

		if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

		$id=$_POST['iduser'];
		
		$this->my_user->delete($id);
		header('location: '. site_url("UsersCtrl/listuser/"));
		}
		else{
			$this->load->view('pages/PageConnexion');
			}
		}
			


   	public function modifuser() {
		$this->load->model('my_user');
		$this->load->helper('form');
		$this -> load -> library('form_validation');

		if (isset($_COOKIE['login']) && $this->My_admin->verifcookie($_COOKIE['login'])) {

		$id=$_POST['iduser'];

		$data=array(
            
            "pseudouser"=> htmlspecialchars($_POST['pseudouser']),
            "ageuser"=> htmlspecialchars($_POST['ageuser']),
            "emailuser" => htmlspecialchars($_POST['emailuser']),
            "idteam" => htmlspecialchars($_POST['idteam']),

			);
		
		$this->my_user->update($id, $data);
		header('location: '. site_url("UsersCtrl/listuser/"));
		}

		else{
			$this->load->view('pages/PageConnexion');
			}
		}



}
