<?php 

class User_model extends CI_MODEL {
    private $table = 'users';

    public function __constructor(){
        parent::__constructor();
    }

    public function addUser($data){
        if($this->userChecker($data['username'], 'add')){
            $this->db->insert('users', $data);

            echo $this->db->last_query();
        }
        return 0;
        
    }

    public function userChecker($username, $purpose){
        if($purpose == 'add'){
            $this->db->where('username', $username);
                $query = $this->db->get($this->table);
                if(count($query->result_array())){
                    return 0;
                }
                return 1;
            }
        }
        
}