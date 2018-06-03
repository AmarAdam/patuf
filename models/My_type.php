<?php

	class My_type extends CI_Model{

        protected $table ='type_team';


     	public function __construct() {
        	parent::__construct();

    	} 

		public function selectAll(){
			$this->load->database();
    		return $this->db->select('*')
                    	->from('type_team')
                    	->get()
                    	->result();
        }

        public function insert($data) {
            $this->load->database();
            $this->db->set('nomtype', $data['nomtype'])
            ->set('id_type_team', $data['id_type_team'])
            ->insert($this->table);
        }

        public function delete($id){
            $this->load->database();
            return $this->db->where('id_type_team',$id)
                        ->delete($this->table);
        }



	}
?>