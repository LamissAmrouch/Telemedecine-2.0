<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 02/08/2018
 * Time: 16:28
 */

class Contrat_model extends CI_Model
{
    public function AddContrat($Parametrs){
        $sql = 'insert into contrat ';
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
    public function getEngagement($id){
        $query = $this->db->query('select * from contrat WHERE contrat.type != "rec" and etat = "Active" and Medecin_id='.$id);
        return $query->result();
    }

    public function Delete($id){
        $query = $this->db->query('update contrat set etat = "Bloquer" WHERE Numero ='.$id);

    }

    public function exists($Parametrs){
        $sql = 'select * from contrat WHERE ';

        $i = sizeof($Parametrs);
        $j = 0;
        foreach ($Parametrs as $v => $k):
            $sql .= $v.' = "'.$k.'" ';
            end($Parametrs);
            if ($j < $i-1){
                $sql .=' and ';
            }
            $j++;
        endforeach;
        echo $sql;
        $query = $this->db->query($sql);
        return $query->row();

    }

    public function ModifierContrat($Parametrs,$id){
        $sql = 'update contrat SET ';

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
        $sql .='where Numero = '.$id;
        echo $sql;
        $query = $this->db->query($sql);
        echo $query;
    }

    public function UpdateifExsists($Parameters){
        $cont['Service_id'] = $Parameters['Service_id'];
        $cont['Hopital_id'] = $Parameters['Hopital_id'];
        $cont['Medecin_id'] = $Parameters['Medecin_id'];
        $cont['etat'] = "Active";
        $cont['DateDebut'] = $Parameters['DateDebut'];
        $cont['type'] = $Parameters['type'];
        if($cont['type'] != 'rec'){
            $cont['DateFin'] = $Parameters['DateFin'];
        }
        $res = $this->exists($cont);
        var_dump($res);
        if($res){
            $this->ModifierContrat($Parameters,$res->Numero);
        }else{
            if($Parameters['type'] == 'rec')
                $this->DeleteRec($Parameters['Medecin_id']);
            $this->AddContrat($Parameters);
        }

    }

    public function DeleteRec($Nss){
        $this->db->query('update contrat set etat = "Bloquer" where type = "rec" and Medecin_id = "'.$Nss.'"');
    }

}