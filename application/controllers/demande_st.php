<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class demande_st extends CI_Controller {

function __construct(){

    parent::__construct();
    $this->load->model('seance_tl_model');
    $this->load->model('consult_model');
      $data = new stdClass();
							
} 
	

   public function ajouter_seance_telemedecine()
   {

            $data['specialite'] = $this->consult_model->lister_specialite();
		    $this->form_validation->set_rules('codep', 'codep', 'required');

            if ($this->form_validation->run() === FALSE)
		    {

		                 $data['view_isi']='consultation/demande';
                         $this->load->view('layouts/template',$data);
		    }
		    else
		    {

		        $id_patient = $this->input->post('codep');
		        $hopital =  $this->input->post('hopital');		       
		        $specialite = $this->input->post('specdema');
		        $description =  $this->input->post('descrip');
		        $dated =  $this->input->post('dated');
		        $datef =  $this->input->post('datef');
		        $degre_urgence =  $this->input->post('Etat');
		        $motif =  $this->input->post('motif');
		        $type_seance =  $this->input->post('type_seance');
		        $this->seance_tl_model->ajouter_senace_tl($id_patient,  $hopital, $specialite,$description, $dated,  $datef,  $degre_urgence,  $motif, $type_seance);
		        
		        //$data['view_isi']='consultation/ok';
		        //$this->load->view('layouts/template',$data);
		           $data['view_isi']='consultation/demande';
                   $this->load->view('layouts/template',$data);

              

		    }


   }



}
