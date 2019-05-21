<?php  if ( ! defined('BASEPATH')) exit('No direct script access kallowed');
 
 
class consult_model extends CI_Model 
{
      //on recupere la table consultation dans une variable protected table (toujours)
      protected $table = 'consultation' ; 
      protected $table2= 'specialite_med'; 
      protected $table_m = 'maladie';
      protected $table_r ='rdv';
      protected $table_e = 'examen';
      

//Insertion d'une nouvelle consultation dans la base de donné database1

public function ajouter_consult($situa_cliniq,$anato,$examen_compl,$tension,$freq,$temp,$exam_car ,$symptotes, $maladie, $traitement ,$bio_med,$conseil,$reorientation,$synthese,$id_patient)
	{ 
      
      return 
      $this->db->set('situation_clinique', $situa_cliniq)		
			->set('anatologie_cytologie', $anato)
			->set('examen_compl', $examen_compl)
      ->set('tension', $tension)
      ->set('frequence_car', $freq)
      ->set('temperature', $temp)
      ->set('examen_car', $exam_car)
			->set('symptotes', $symptotes)
       ->set('maladie',$maladie)
		  ->set('traitement',$traitement)
      ->set('bio_med',$bio_med)
      ->set('conseil',$conseil)   
      ->set('reorientation',$reorientation)
      ->set('synthese',$synthese)
      ->set('date_cons','NOW()', false)   
      ->set('id_patient', $id_patient)
			->insert($this->table);
	} 

// recuperer les symptotes d'une consultation en donnant son id 
  public function get_symptote_by_id ($id)
   {
   
    return $this->db->select('symptote')
                        ->from($this->table)
                        ->where('id', $id)
                        ->get()
                        ->row('symptote');
                        
   } 

//recuperer tous les champs d'une cconsultation 
// on recupere un tableau indexé par le nom du champs 
public function get_consult ($id)
   {
   
    return $this->db->select('*')
                        ->from($this->table)
                        ->where('id', $id)
                        ->get()
                        ->row(); 
                        
   } 


//suprimer une consultation 
   public function delete_consult ($id)
   {
   	 return $this->db->where('id', (int)$id)
				->delete($this->table);

   }
   

  public function lister_specialite()
 {
   
  return $this->db->select('*')->from($this->table2)->get(); 

}
 
 public function lister_maladie()
{
  
  return    $this->db->select('nom')->from($this->table_m)->get();
}



public function get_code_maladie($nom)
{ 
   return $this->db->select('codemaladie')->from($this->table_m)->where('nom',$nom)->get()->row('codemaladie'); 
   
}




public function lister_examen()
{
  
  return  $this->db->select('nom')->from($this->table_e)->get();
}


public function ajouter_rdv($daterdv,$codepatient)
{
    return 
      $this->db->set('date_rdv', $daterdv)   
      ->set('id_patient',$codepatient )
      ->insert($this->table_r);
     
}

}