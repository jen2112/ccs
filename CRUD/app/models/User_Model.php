<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_Model extends Model{
    public function getusers(){
        $this->call->database();
        return $this->db->table('users')->get_all();
    }
}