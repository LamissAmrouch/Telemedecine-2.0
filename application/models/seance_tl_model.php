<?php  if ( ! defined('BASEPATH')) exit('No direct script access kallowed');
 
 
class seance_tl_model extends CI_Model 
{
      
      protected $table = 'demande_seance' ;
     
     
  public function ajouter_senace_tl ($id_patient,$hopital,$specialite,$description,$dated,$datef,$degre,$motif, $typeseance)
	{ 
      
      return 
      $this->db->set('id_patient', $id_patient)	
	  ->set('hopital', $hopital)
	  ->set('Specialite_id', $specialite)
      ->set('description', $description)
      ->set('date_debut', $dated)
      ->set('date_fin', $datef)
      ->set('degre', $degre)
	  ->set('motif', $motif)
      ->set('type_seance',$typeseance)
	  ->insert($this->table);
} 







  }
