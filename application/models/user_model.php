<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    /*
    *
    * get
    * 
    * Get the user data. 
    *
    * @param array user data, id, user name and email
    * @return bool
    */
    public function get_user($data){
        if(empty($data['name']) && empty($data['email']) && empty($data['id']))
            return NULL;
        $query = $this->db->where($data)
                          ->get("user");
        $query = $query->result();
        if(empty($query)) return NULL;
        else return $query[0];
    }



}
