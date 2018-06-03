<?php

	class My_match extends CI_Model{

        protected $table ='match';


     	public function __construct() {
        	parent::__construct();

    	} 

		public function selectAll(){
			$this->load->database();
    		return $this->db->select('*')
                    	->from('match')
                    	->get()
                    	->result();
        }

        public function insert($data) {
            $this->load->database();
            $this->db->set('idfield', $data['idfield'])
            ->set('idteam1', $data['idteam1'])
            ->set('idteam2', $data['idteam2'])
            ->set('datematch', $data['datematch'])

            ->insert($this->table);
        }

        public function delete($id){
            $this->load->database();
            return $this->db->where('idmatch',$id)
                        ->delete($this->table);
        }

        public function update($id, $data) {
        $this->load->database();
        $this->db->set('idfield', $data['idfield'])
                ->set('idteam1', $data['idteam1'])
                ->set('idteam2', $data['idteam2'])
                ->set('datematch', $data['datematch'])

                ->where('idmatch',$id)
                ->update($this->table);
        }



	}
?>