<?php

	class My_user extends CI_Model{

        protected $table ='users';


     	public function __construct() {
        	parent::__construct();

    	} 

		public function selectAll(){
			$this->load->database();
    		return $this->db->select('*')
                    	->from('users')
                    	->get()
                    	->result();
        }

        public function selectById($id) {
    		$this->load->database();
    		$this->db->select('*')
                    ->from('users')
                    ->where('iduser', $iduser)
                    ->get()
                    ->result();
            print_r($this);
  		}


  		public function getLastUserId() {
    		$this->load->database();
    		return $this->db->select('iduser')
        	        ->from('users')
                    ->order_by('iduser', 'desc')
                    ->limit(1)
                    ->get()
                    ->result();
  		}


    	public function insert($data) {
            $this->load->database();
            $this->db->set('pseudouser', $data['pseudouser'])
        	->set('ageuser', $data['ageuser'])
 			->set('emailuser', $data['emailuser'])
            ->set('idteam', $data['idteam'])

			->insert($this->table);
        }
			

		public function delete($id){
      		$this->load->database();
      		return $this->db->where('iduser',$id)
                    	->delete($this->table);
    	}

        public function update($id, $data) {
        $this->load->database();
        $this->db->set('pseudouser', $data['pseudouser'])
                ->set('ageuser', $data['ageuser'])
                ->set('emailuser', $data['emailuser'])
                ->set('idteam', $data['idteam'])

                ->where('iduser',$id)
                ->update($this->table);
        }

	



    }
?>
