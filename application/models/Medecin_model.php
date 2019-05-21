<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 20/07/2018
 * Time: 00:07
 */
class Medecin_model extends CI_Model {
    protected $returnType    = 'App\Entities\Doctor';
    public function getAll(){
        $query = $this->db->query("select *,Specialite.Discription as specialite,Specialite.id,Grade.Discription as grade, hopital.nom as hopital
                  from Medecin,Specialite,Grade,hopital,Contrat 
                  where Medecin.Specialite_id = Specialite.id and Medecin.Grade_id = Grade.id and contrat.Medecin_id = medecin.NSS and Hopital.id = contrat.Hopital_id and contrat.type = 'rec' and contrat.etat = 'Active'");
        return $query->result();
}
    public  function  getById($Nss){
        $query = $this->db->query("select *,Specialite.Discription as specialite,Specialite.id, hopital.nom as hopital,Grade.Discription as grade,hopital.id as hopital_id,Service.id as service_id, contrat.DateDebut as DateRecrutement
                  from Medecin,Specialite,Grade,hopital,Contrat,Service
                  where Medecin.Specialite_id = Specialite.id and Medecin.Grade_id = Grade.id and contrat.Medecin_id = medecin.NSS and contrat.Service_id = Service.id and Hopital.id = contrat.Hopital_id and contrat.type = 'rec' and contrat.etat = 'Active' and  Medecin.Nss =".$Nss);
        return $query->row();
    }
    public function Delete($Nss){
        $query = $this->db->query("delete  from Medecin where NSS = ".$Nss);
    }
    public function getDoctorBySpeciality($specialityId){
        $query = $this->db->query("select * from Medecin where Specialite_id =".$specialityId);
        return $query->result();
    }

    public function ModifieDoc($Parametrs,$Nss){
        $sql = 'update medecin SET ';

        $i = sizeof($Parametrs);
        $j = 0;
        foreach ($Parametrs as $v => $k):
            $sql .= $v.' = "'.$k.'" ';
            end($Parametrs);
            if ($j < $i-1){
              $sql .=' , ';
            }
            $j++;
        endforeach;
        $sql .='where NSS = '.$Nss;
        echo $sql;
        $query = $this->db->query($sql);
        echo $query;
    }

   /* public function getSpecialite(){
        if($this->specialite === null){
            $query = $this->db->query("select Discription from Specialite where id = ".$this->Specialite_id);
            $this->specialite = $query->row();
        }
        return $this->specialite;
    }*/

    public function AddDoctor($Parametrs){
        $sql = 'insert into medecin ';
        $value = ' VALUES ( ';
        $stats = ' ( ';
        $i = sizeof($Parametrs);
        $j = 0;
        foreach ($Parametrs as $v => $k):
           $stats .=$v ;
           $value .='"'. $k .'"';
            end($Parametrs);
            if ($j < $i-1){
                $stats .=',';
                $value .= ',';
            }
            $j++;
       endforeach;
       $stats .= ' ) ';
       $value .= ' );';

       $sql .= $stats;
       $sql .= $value;
       echo $sql;
        $query = $this->db->query($sql);
        echo $query;
    }
}
?>