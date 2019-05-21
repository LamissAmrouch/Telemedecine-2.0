<?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class patient_model extends CI_Model
{
	 protected $table='patient'; 

 
 
public function getAll()
{
      $query = $this->db->query("select * from patient");
      return $query->result();

} 



public function get_patient_data($codepatient)
	 {

           return $this->db->select('*')
                        ->from($this->table)
                        ->where('id', $codepatient)
                        ->get()
                        ->row(); 
                        
   } 



public function lister_id_patient()
  {
  
  return $this->db->select('id')->from($this->table)->get(); 

  }


	


}

