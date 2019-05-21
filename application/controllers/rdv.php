<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rdv extends CI_Controller {

	function __construct() {
    
    parent::__construct();

   /* $data['view_isi']='consultation/ges_cons';
   $this->load->view('layouts/template',$data); */

					   
}

public function index()
{

}





  public function ges_rdv()
       {  

          $data['view_isi']='rdv/ges_rdv';
          $this->load->view('layouts/template',$data);

        }



}




