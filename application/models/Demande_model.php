<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 24/09/2018
 * Time: 15:35
 */

class Demande_model extends CI_Model
{
    public function get(){

            $query = $this->db->query("select *,Specialite.Discription as specialite , Demande_Seance.id as id from Demande_Seance,Specialite
                                        where Demande_Seance.Specialite_id = Specialite.id

");
            return $query->result();
    }

    public function getById($id){
        $query = $this->db->query("select *,Specialite.Discription as specialite,Demande_Seance.id as id from Demande_Seance,Specialite
                                        where Demande_Seance.Specialite_id = Specialite.id and Demande_Seance.id ='".$id."'");
        return $query->result();
    }

}