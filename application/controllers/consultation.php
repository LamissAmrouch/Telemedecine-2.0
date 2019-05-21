<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultation extends CI_Controller {

	function __construct(){

    parent::__construct();

          /* $data['view_isi']='consultation/ges_cons';

	        $this->load->view('layouts/template',$data); */
	         $this->load->model('M_consultation');
		     $this->load->model('consult_model');			
			 $this->load->model('patient_model');
			  $data = new stdClass();
			  $id_patient="";

}

 public function index()
   {   

           /* $this->form_validation->set_rules('codeP', 'codeP', 'required');
            if ($this->form_validation->run() === FALSE)
		    {

		           $data['view_isi']='consultation/ges_cons';

			        $this->load->view('layouts/template',$data);

		    }
		    else
		    {

		        $codepatient = $this->input->post('codeP');
                $patient = $this->patient_model->get_patient_data($codepatient) ;
      	        $data['patient']=$patient;
                $data['view_isi']='consultation/profile_patient';
	            $this->load->view('layouts/template',$data);


		    }*/



   }

   
			public function ges_cons()
		    {


                  $this->form_validation->set_rules('codeP', 'codeP', 'required');
		      
                 $data['id_patient']= $this->patient_model->lister_id_patient();
		         $data['specialite'] = $this->consult_model->lister_specialite();
		         $data['maladie'] = $this->consult_model->lister_maladie();
		         $data['examen'] = $this->consult_model->lister_examen();
		         
          

		    if ($this->form_validation->run() === FALSE)
		    {

		           $data['view_isi']='consultation/ges_cons';

			        $this->load->view('layouts/template',$data);

		    }
		    else
		    {

		        $id_patient = $this->input->post('codeP');
                
		        $situation_clinique =  $this->input->post('sit_cli');
		       //echo '<script> document.getElementById("nom").innerHTML = lamiss ; </script>' ;
		        $anatologie_cytologie =  $this->input->post('anat_cyt');
		        $examen_compl =  $this->input->post('exam_comp');
		        $tension =  $this->input->post('tension');
		        $freq =  $this->input->post('freq');
		        $tempr =  $this->input->post('tempr');
		        $examcardio =  $this->input->post('examcardio');
		        $symptotes =  $this->input->post('symp');

		        
		        $mal =  $this->input->post('mal'); 

		          $tarray =  $mal[0]; 
		        for($i=1;$i<(sizeof($mal));$i++)
              {
	             if(isset($mal[$i]))
	             {
		                   $tarray = $tarray ."  ". $mal[$i];
		
						
	            }
              }  
                $autre_mal =  $this->input->post('autre_mal');
                $maladie =  $tarray ."   ". $autre_mal;
		        //$code_mal = $this->consult_model->get_code_maladie($maladie);
		        //$data['traitement'] = $this->consult_model->lister_traitement_m($code_mal);
		        $trait =  $this->input->post('trait');
		        
               $tarray =  $trait[0]; 
		        for($i=1;$i<(sizeof($trait));$i++)
              {
	             if(isset($trait[$i]))
	             {
		                   $tarray = $tarray ."   ". $trait[$i];
		
						
	            }
              }  



                $autre_trait =  $this->input->post('autre_trait');
		        $traitement =     $tarray ."  ". $autre_trait ; 
		        $exam =  $this->input->post('exam');

		           $tarray =  $exam[0]; 
		        for($i=1;$i<(sizeof($exam));$i++)
              {
	             if(isset($exam[$i]))
	             {
		                   $tarray = $tarray ."  ". $exam[$i];
		
						
	            }
              }  
		        $autre_exam =  $this->input->post('autre_exam');

                $examen =  $tarray."  ". $autre_exam ;

                $conseils =  $this->input->post('conseils');

		        $reorientation =  $this->input->post('orien');
                $synthese =  $this->input->post('synthese');
		       


          $this->consult_model->ajouter_consult($situation_clinique,$anatologie_cytologie,$examen_compl,$tension,$freq,$tempr,$examcardio ,$symptotes,  $maladie,  $traitement ,$examen,$conseils,$reorientation,$synthese,$id_patient);
	
              // echo "<script > var $x=5 ; </script>" ; 

              
		                  $data['view_isi']='consultation/suite_cons';
		                  $this->load->view('layouts/template',$data);

  

		    }

			}






		public function getConsultations()
		{

	       

            $Consultation = $this->M_consultation->getAll();
	       
	        $Limit =sizeof($Consultation);
	        $Limit = $Limit / 8 ;
	        $data['Consultation'] = $Consultation;
	        $data['Limite'] = $Limit;
            
	        
		    $this->form_validation->set_rules('codeP', 'codeP', 'required');

		     if ($this->form_validation->run() === FALSE)
		     { 

		     	 $data['view_isi']='consultation/liste_consultation';
 				 $this->load->view('layouts/template',$data);
 			}
			else
			{
              $codepatient = $this->input->post('codeP');
		      $this->load->model("M_consultation",'',True);

		      $ConsultP= $this->M_consultation->getcons($codepatient);
		      $Limit =sizeof($ConsultP);
		      $Limit = $Limit / 8 ;
		      $data['ConsultP'] = $ConsultP;
		      $data['Limite'] = $Limit;
		      $data['view_isi']='consultation/liste_consultationP';
	          $this->load->view('layouts/template',$data);
	    }
}
      
     
// affichage de profile de chaque patient 
    public function get_patient_profile($codepatient)
      {     
      	     
      	    $patient = $this->patient_model->get_patient_data($codepatient) ;
      	    $data['patient']=$patient;
            $data['view_isi']='consultation/profile_patient';
	        $this->load->view('layouts/template',$data);

  
       }

//affichage des information de chaque consultation 
public function get_information_consultation($codecons)
{
            $cons = $this->M_consultation->get_consultation_data($codecons);
            $data['cons']=$cons;
            $data['view_isi']='consultation/afficher_consultation';
	        $this->load->view('layouts/template',$data);
}


public function lister_patient()
{ 
	 $Patient = $this->patient_model->getAll();
     $data['Patient']=$Patient;
     $Limit =sizeof($Patient);
	 $Limit = $Limit / 8 ;
	        
	$data['Limite'] = $Limit;
            
     $data['view_isi']='consultation/liste_profile_patient';
	 $this->load->view('layouts/template',$data);

}




}


