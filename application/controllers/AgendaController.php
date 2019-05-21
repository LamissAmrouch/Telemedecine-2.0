<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 15/09/2018
 * Time: 20:12
 */

class AgendaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function getmounth($mounth,$year){
        $params = array('month' => $mounth, 'year' => $year);
        $this->load->library('Month',$params);
        $this->load->model('Disponibilite_model','',True);
        $this->load->model("Speciality_model",'',True);
        $this->load->model("Grade_model",'',True);
        $this->load->model("Hopitale_model",'',True);
        $this->load->library('Form');
        // recuperer la liste medcines, Specialites et Grades
        $Specialities = $this->Speciality_model->getAll();
        $Grades = $this->Grade_model->getAll();
        $Hopitals = $this->Hopitale_model->getAll();
        $attribut = 'id = "Spe" onchange="AgendaFilter()"';
        $Specialities_Select = $this->form->Select("Speciality: ","Specialite",$Specialities,$attribut);
        $attribut = 'id = "Grd" onchange="AgendaFilter()"';
        $Grades_Select = $this->form->Select("Grade","Grade",$Grades,$attribut);
        $attribut = 'id = "Hpt" onchange="AgendaFilter()"';
        $Hopitals_Select = $this->form->Select("Hopital:   ","Hopital",$Hopitals,$attribut,'nom');
        $data['month'] = $this->month;
        $data['weeksNum'] = $this->month->getWeeks();
        $data['monthOnString'] = $this->month->toString();
        $data['Days'] = $this->month->Days;
        $start = $this->month->getFirstDay();
        $data['firstDay'] =$start->format('N') == '6' ? $start : $this->month->getFirstDay()->modify('last saturday');
        $end = clone $data['firstDay'];
        $end->modify('+'.(6+7*$data['weeksNum']-1).' days');
        $Dispos = $this->Disponibilite_model->getDisponibiliteBetween($data['firstDay'],$end);
        $this->load->library('Events',$Dispos);
        $Dispos = $this->events->getByDay();
        $this->load->library('Events',$Dispos);
        $data['Specialities'] = $Specialities_Select;
        $data['Grades'] = $Grades_Select;
        $data['Hopitals'] = $Hopitals_Select;
        $data['Events'] = $Dispos;
        $data['next'] = $this->month->NextMonth();
        $data['prev'] = $this->month->PreviousMonth();
        $data['view_isi']= 'medecin/Agenda';
        $this->load->helper('url');
        $this->load->view('layouts/templateWithoutSide',$data);
    }
    public function getCurrentMounth(){
        $this->getmounth(null,null);
    }

    public function DispoForm($NSS){
        $this->load->library('Form');
        $data['Date'] = $date = $this->form->date('dateN', 'Entré la Date:');
        $data['HeureDebut'] = $this->form->time('HeureD', 'de:');
        $data['HeureFin'] = $this->form->time('HeureF', 'à:');
        $data['Nmbr'] = $this->form->number('Nbr','Nombre semaine: ');
        $data['view_isi']= 'medecin/AjouterDispo';
        $data['NSS'] = $NSS;
        $this->load->helper('url');
        $this->load->view('layouts/template',$data);
    }

    public function AjouterDispo($Nss){
        $this->load->model('Disponibilite_model','',True);
        $dispo['Date'] = $_POST['dateN'];
        $dispo['HeureDebut'] = $_POST['dateN'].' '.$_POST['HeureD'].':00';
        $dispo['HeureFin'] = $_POST['dateN'].' '.$_POST['HeureF'].':00';
        $dispo['Medcine_id'] = $Nss;
        $this->Disponibilite_model->add($dispo);

        $this->load->helper('url');
        echo $_POST['add'];
        if($_POST['add'] == '1'){
            header('Location: '.base_url().'Doctor/AjouterDispo/'.$Nss);
        }else {
            header('Location: ' . base_url() . 'doc');
        }
    }

}