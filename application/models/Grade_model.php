<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 25/07/2018
 * Time: 20:30
 */

class Grade_model extends CI_Model
{
    public function getAll(){
        $query = $this->db->query("select * from Grade");
        return $query->result();
    }

}