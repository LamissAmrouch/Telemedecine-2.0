<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 30/07/2018
 * Time: 14:47
 */

class Service_model extends CI_Model
{
public function getServiceByHopital($id){
   $query =  $this->db->query("select Service.* from Service,service_hopital where Service.id = service_hopital.Service_id and service_hopital.hopital_id =".$id);
   return $query->result();
}
}