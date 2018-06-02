<?php

	class My_team extends CI_Model{

        protected $table ='team';


     	public function __construct() {
        	parent::__construct();

    	} 

		public function selectAll(){
			$this->load->database();
    		return $this->db->select('*')
                    	->from('team')
                    	->get()
                    	->result();
        }

        public function selectById($id) {
            $this->load->database();
            $this->db->select('*')
                    ->from('team')
                    ->where('idteam', $idteam)
                    ->get()
                    ->result();
            print_r($this);
        }

        public function insert($data) {
            $this->load->database();
            $this->db->set('nameteam', $data['nameteam'])
            ->set('numbplayer', $data['numbplayer'])
            ->set('id_type_team', $data['id_type_team'])
            ->insert($this->table);
        }

        public function delete($id){
            $this->load->database();
            return $this->db->where('idteam',$id)
                        ->delete($this->table);
        }

        public function update($id, $data) {
            $this->load->database();
            $this->db->set('nameteam', $data['nameteam'])
                ->set('numbplayer', $data['numbplayer'])
                ->set('id_type_team', $data['id_type_team'])

                ->where('idteam',$id)
                ->update($this->table);
    }



	}
?>
