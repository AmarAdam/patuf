<?php

	class My_field extends CI_Model{

        protected $table ='field';


     	public function __construct() {
        	parent::__construct();

    	} 

		public function selectAll(){
			$this->load->database();
    		return $this->db->select('*')
                    	->from('field')
                    	->get()
                    	->result();
        }

        public function insert($data) {
            $this->load->database();
            $this->db->set('namefield', $data['namefield'])
            ->set('adressefield', $data['adressefield'])
            ->insert($this->table);
        }

        public function delete($id){
            $this->load->database();
            return $this->db->where('idfield',$id)
                        ->delete($this->table);
        }



	}
?>
