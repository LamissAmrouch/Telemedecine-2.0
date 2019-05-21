<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 17/09/2018
 * Time: 09:50
 */

class Disponibilite_model extends CI_Model
{
    public function getDisponibiliteBetween($debut,$fin){
        $query = $this->db->query("select Disponibilite.*,Specialite.Discription as specialite,Specialite.id,Grade.Discription as grade, hopital.nom as hopital ,Medecin.Nom as Nom , Medecin.Prenom as Prenom , Medecin.NSS as NSS
                  from Medecin,Specialite,Grade,hopital,Contrat,Disponibilite
                  where Medecin.NSS = Disponibilite.Medcine_id and Medecin.Specialite_id = Specialite.id and Medecin.Grade_id = Grade.id and contrat.Medecin_id = medecin.NSS and Hopital.id = contrat.Hopital_id and contrat.type = 'rec' and contrat.etat = 'Active' AND 
                  Disponibilite.Date BETWEEN '{$debut->format('y-m-d')}' and '{$fin->format('y-m-d')}'");
        return $query->result();
    }

    public function add($Parametrs){
        $sql = 'insert into Disponibilite ';
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