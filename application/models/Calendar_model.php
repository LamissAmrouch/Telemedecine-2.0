<?php

class Calendar_Model extends CI_Model
{    protected $table = 'rdv' ;

    public function get_events($start, $end)
    {
        return $this->db
            ->where("start >=", $start)
            ->where("end <=", $end)
            ->get("rdv");
    }

    public function add_event($name,$desc,$start_date,$end_date)
    {

      return $this->db->set('title',$name)
      ->set('description',$desc)
      ->set('start',$start_date)
      ->set('end',$end_date)

      ->insert($this->table);
    }

    public function get_event($id)
    {
        return $this->db->where("ID", $id)->get("rdv");
    }

    public function update_event($id, $data)
    {
        $this->db->where("ID", $id)->update("rdv", $data);
    }

    public function delete_event($id)
    {
        $this->db->where("ID", $id)->delete("rdv");
    }

}

?>
