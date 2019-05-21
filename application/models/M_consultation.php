<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class M_consultation extends CI_Model
{
	protected $table='consultation';

  public function getAll(){
      $query = $this->db->query("select * from consultation");
      return $query->result();
} 



public function getcons($codepatient)
{
	$query = $this->db->query("select * from consultation where id_patient = ".$codepatient);
  return $query->result();

}


public function get_consultation_data($codecons)
	 {

              return $this->db->select('*')
                        ->from($this->table)
                        ->where('id_cons', $codecons)
                        ->get()
                        ->row(); 
                        
   } 




}
