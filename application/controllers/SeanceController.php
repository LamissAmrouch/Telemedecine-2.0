<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 24/09/2018
 * Time: 15:33
 */

class SeanceController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Planning_model");
    }

    public function listSeance(){
        $this->load->model("demande_model", '', True);
        $demands = $this->demande_model->get();
        $data['Demands'] = $demands;
        $data['view_isi']='medecin/ListeSeance';
        $this->load->helper('url');
        $this->load->view('layouts/template',$data);
    }


    public function getSeance($id){
        $this->load->model("demande_model", '', True);
        $this->load->library('Form');
        $demande = $this->demande_model->getById($id);
        $data['Demands'] = $demande;
        $data['view_isi']='medecin/AfficheSeance';
        $num = $this->form->input('Numero', 'Numero : ', 'value="' . $demande[0]->id . '" readonly');
        $titre=$this->form->input('Numero', 'type séance : ', 'value="' . $demande[0]->type_seance . '" readonly');
        $motif = $this->form->text('Numero', 'motif : ',  $demande[0]->motif , ' readonly');
        $dateD = $this->form->input('Numero', 'date début : ', 'value="' . $demande[0]->date_debut . '" readonly');
        $dateF = $this->form->input('Numero', 'date fin : ', 'value="' . $demande[0]->date_debut . '" readonly');
        $specialite = $this->form->input('Numero', 'Specialite : ', 'value="' . $demande[0]->specialite . '" readonly');
        $urgance = $this->form->input('Numero', 'Degré d urgance : ', 'value="' . $demande[0]->degre . '" readonly');
        $data['urgance'] = $urgance;
        $data['j'] = $demande[0]->id;
        $data['num'] = $num;
        $data['titre'] = $titre;
        $data['motif'] = $motif;
        $data['dateD'] = $dateD;
        $data['dateF'] = $dateF;
        $data['specialite'] = $specialite;
        $this->load->helper('url');
        $this->load->view('layouts/template',$data);
    }

    public function planningForm($id){
            $this->load->view('medecin/Calendar',array('id'=> $id));
    }
    public function get_events()
    {
        // Our Start and End Dates
        $start = $this->input->get("start");
        $end = $this->input->get("end");

        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $start_format = $startdt->format('Y-m-d H:i:s');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $end_format = $enddt->format('Y-m-d H:i:s');

        $events = $this->Planning_model->get_events($start_format, $end_format);
        //var_dump($events);
        $data_events = array();


        foreach($events->result() as $r) {
            $debut = new DateTime($r->Date);
            $data_events[] = array(
                "id" => $r->id,
                "title" => $r->titre,
                "description" => $r->Commentaire,
                "start" => $r->Date,
                "end" => $debut->modify('+ '.$r->duree.' Hour')->format('Y-m-d H:i:s')

            );
        }

        echo json_encode(array("events" => $data_events));
        exit();
    }


    public function add_event($id)
    {
        /* Our calendar data */
        $name = $this->input->post("name", TRUE);
        $desc = $this->input->post("description", TRUE);
        $title = $this->input->post("titre", TRUE);
        $start_date = $this->input->post("start_date", TRUE);
        $end_date = $this->input->post("end_date", TRUE);

       /* if(!empty($start_date)) {
            $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
            $start_date = $sd->format('Y-m-d H:i:s');
            $start_date_timestamp = $sd->getTimestamp();
        } else {
            $start_date = date("Y-m-d H:i:s", time());
            $start_date_timestamp = time();
        }*/



        $this->Planning_model->add_event($id,$desc,$start_date,$end_date,$title);
        header('Location: '.base_url().'Seance/planifier/'.$id);
        die();
    }


    public function edit_event($id)
    {
        $eventid = intval($this->input->post("eventid"));
        $event = $this->Planning_model->get_event($eventid);
        if($event->num_rows() == 0) {
            echo"Invalid Event";
            exit();
        }

        $event->row();

        /* Our calendar data */
        $titre = $this->input->post("titre", TRUE);
        $desc = $this->input->post("description", TRUE);
        $start_date = $this->input->post("start_date", TRUE);
        $end_date = $this->input->post("end_date", TRUE);
        $delete = intval($this->input->post("delete"));

        if(!$delete) {

           /* if(!empty($start_date)) {
                $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
                $start_date = $sd->format('Y-m-d H:i:s');
                $start_date_timestamp = $sd->getTimestamp();
            } else {
                $start_date = date("Y-m-d H:i:s", time());
                $start_date_timestamp = time();
            }

            if(!empty($end_date)) {
                $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
                $end_date = $ed->format('Y-m-d H:i:s');
                $end_date_timestamp = $ed->getTimestamp();
            } else {
                $end_date = date("Y-m-d H:i:s", time());
                $end_date_timestamp = time();
            }*/

            $this->Planning_model->update_event($eventid, array(
                    "titre" => $titre,
                    "commentaire" => $desc,
                    "date" => $start_date,
                    "duree" => 2,
                )
            );

        } else {
            $this->Planning_model->delete_event($eventid);
        }
                header('Location: '.base_url().'Seance/planifier/'.$id);
        die();

        //redirect(site_url("medecin/Calendar"));
    }

}