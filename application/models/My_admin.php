<?php

	class My_admin extends CI_Model{

        protected $table ='admin';


     	public function __construct() {
        	parent::__construct();

    	} 

        function verifadmin($data){
        
        $this->load->database();

        $result=$this->db
            ->select('pseudoadmin', $data['pseudoadmin'])
            ->from('admin')
            ->where('pseudoadmin', $data['pseudoadmin'])
            ->where('passwordadmin', crypt($data['passwordadmin'],'md5'))
            ->get()
            ->result();
        
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
	   
        public function insert($data) {
            
            $this->load->database();
            $this->db->set('pseudoadmin', $data['pseudoadmin'])
            ->set('passwordadmin', crypt($data['passwordadmin'],'md5'))
            ->set('pseudocrypt', crypt($data['pseudoadmin'],'md5'))

            ->insert($this->table);
        }

        function verifcookie($cookie){
        
        $this->load->database();
        $result=$this->db
            ->select('pseudoadmin')
            ->from('admin')
            ->where('pseudocrypt',$cookie)
            ->get()
            ->result();
        
        if($result){
           return true;
        }
        else{
            return false;
        }
    }
		
		
	 public function delete($id){
            $this->load->database();
            return $this->db->where('pseudoadmin',$id)
            ->delete($this->table);
        }




    }
?>
