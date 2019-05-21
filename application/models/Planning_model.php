<?php

class Planning_Model extends CI_Model
{    protected $table = 'Planning';

    public function get_events($start, $end)
    {
        return $this->db
            ->where("Date >=", $start)
            ->get("Planning");
    }

    public function add_event($id,$desc,$start_date,$end_date,$title)
    {

      return $this->db->set('Demande_id',$id)
      ->set('Commentaire',$desc)
      ->set('Date',$start_date)
      ->set('duree',$end_date)
      ->set('titre',$title)
      ->insert($this->table);
    }

    public function get_event($id)
    {
        return $this->db->where("id", $id)->get("Planning");
    }

    public function update_event($id, $data)
    {
        $this->db->where("id", $id)->update("Planning", $data);
    }

    public function delete_event($id)
    {
        $this->db->where("id", $id)->delete("Planning");
    }

}

?>
