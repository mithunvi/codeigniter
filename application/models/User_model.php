<?php 


class User_model extends CI_Model{

	public function __construct()
        {
             parent::__construct();
        }

	public function get_user()
        {
            $query = $this->db->get('users');
            return $query->result();
        }
    public function store($data){

    	$this->db->insert('users',$data);
    	return $this->db->insert_id();

    }

    public function delete($id){
    	$this->db->delete('users',array('id'=> $id));
    	echo $this->db->affected_rows();
    }

}