<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 27/07/2018
 * Time: 01:01
 */

class Hopitale_model extends CI_Model
{
    public function getAll(){
        $query = $this->db->query("select * from Hopital");
        return $query->result();
    }
}