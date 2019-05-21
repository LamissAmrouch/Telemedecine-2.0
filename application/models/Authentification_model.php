<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 19/09/2018
 * Time: 15:10
 */

class Authentification_model extends CI_Model
{
    public function getUser($login,$pass){

        $query = $this->db->query("select user_id,user_type from Authentification where login ='".$login."' and password ='".$pass."'");
        return $query->result();
    }
    public function Register($Parametrs){

        $sql = 'insert into Authentification ';
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