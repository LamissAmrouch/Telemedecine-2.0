<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 21/07/2018
 * Time: 12:14
 */

class Speciality_model extends CI_Model
{
    public function getAll(){
        $query = $this->db->query("select * from Specialite");
        return $query->result();
    }
}