<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Month: 20/07/2018
 * Time: 00:10
 */

class medController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getMedListe(){
        $this->load->model("medecin_model",'',True);
        $this->load->model("Speciality_model",'',True);
        $this->load->model("Grade_model",'',True);
        $this->load->model("Hopitale_model",'',True);
        $this->load->library('Form');
        // recuperer la liste medcines, Specialites et Grades
        $Doctors = $this->medecin_model->getAll();
        $Specialities = $this->Speciality_model->getAll();
        $Grades = $this->Grade_model->getAll();
        $Hopitals = $this->Hopitale_model->getAll();
        $attribut = 'id = "Spe" onchange="Filter()"';
        $Specialities_Select = $this->form->Select("Specialité: ","Specialite",$Specialities,$attribut);
        $attribut = 'id = "Grd" onchange="Filter()"';
        $Grades_Select = $this->form->Select("Grade","Grade",$Grades,$attribut);
        $attribut = 'id = "Hpt" onchange="Filter()"';
        $Hopitals_Select = $this->form->Select("Hopital:   ","Hopital",$Hopitals,$attribut,'nom');
        $Limit =sizeof($Doctors);
        $Limit = $Limit / 8 ;
        $data['Doctors'] = $Doctors;
        $data['Specialities'] = $Specialities_Select;
        $data['Grades'] = $Grades_Select;
        $data['Hopitals'] = $Hopitals_Select;
        $data['Limite'] = $Limit;
        $data['view_isi']= 'medecin/DoctorManip';
        $this->load->helper('url');
        $this->load->view('layouts/template',$data);
    }
    public function getMed($id){
        $this->load->model("medecin_model",'',True);
        $res = $this->medcin_model->getByID($id);
        $title = "page";
        $data['res'] = $res;
        $data['title'] = $title;
        $data['view_isi']= 'medecin/medcin';
        $this->load->helper('url');
        $this->load->view('template',$data);
    }

    public function getDoctors(){
        $this->load->model("medecin_model",'',True);
        $this->load->model("Speciality_model",'',True);
        $this->load->model("Grade_model",'',True);
        $this->load->model("Hopitale_model",'',True);
        $this->load->library('Form');
        // recuperer la liste medcines, Specialites et Grades
        $Doctors = $this->medecin_model->getAll();
        $Specialities = $this->Speciality_model->getAll();
        $Grades = $this->Grade_model->getAll();
        $Hopitals = $this->Hopitale_model->getAll();
        $attribut = 'id = "Spe" onchange="Filter()"';
        $Specialities_Select = $this->form->Select("Specialité: ","Specialite",$Specialities,$attribut);
        $attribut = 'id = "Grd" onchange="Filter()"';
        $Grades_Select = $this->form->Select("Grade","Grade: ",$Grades,$attribut);
        $attribut = 'id = "Hpt" onchange="Filter()"';
        $Hopitals_Select = $this->form->Select("Hopital:       ","Hopital",$Hopitals,$attribut,'nom');
        $Limit =sizeof($Doctors);
        $Limit = $Limit / 8 ;
        $data['Doctors'] = $Doctors;
        $data['Specialities'] = $Specialities_Select;
        $data['Grades'] = $Grades_Select;
        $data['Hopitals'] = $Hopitals_Select;
        $data['Limite'] = $Limit;
        $data['view_isi']= 'medecin/DoctorTable';
        $this->load->helper('url');
        $this->load->view('layouts/template',$data);
    }

    public function AddMedForm()
    {
        $this->load->model("Speciality_model",'',True);
        $this->load->model("Grade_model",'',True);
        $this->load->model("medecin_model", '', True);
        $this->load->model("Hopitale_model",'',True);
        $this->load->library('Form');
        $Specialities = $this->Speciality_model->getAll();
        $Grades = $this->Grade_model->getAll();
        $Hopitals = $this->Hopitale_model->getAll();
        $Nss = $this->form->input('nss','Code de Medecin : ');
        $j = $this->form->input('CtrNum','','id="j" value="0" style="display : none"');
        $Nom = $this->form->input('nom','Nom : ');
        $prenom = $this->form->input('prenom','Prénom : ');
        $date = $this->form->date('dateN','Month Naissance :  ');
        $daterec = $this->form->date('dateRec','Date reccrutement : ');
        $mail = $this->form->email('email','E-Mail : ');
        $tel = $this->form->tel('tel','Telephone : ');
        $att = 'id = Hpt , onchange = "LoadServices(\'Hpt\',\'Srv\')"';
        $Specialities_Select = $this->form->SelectForm("Specialite : ","Specialite",$Specialities);
        $Grades_Select = $this->form->SelectForm("Grade: ","Grade",$Grades);
        $Hopitals_Select = $this->form->SelectForm("Hopital : ","Hopital",$Hopitals,$att,'nom');
        $Services_Select = $this->form->SelectForm("Service : ","Service",[],'id="Srv"');
        $user =$this->form->input('user', 'Nom utilisateur : ');
        $pass = $this->form->pass('pass','Password');
        $data['user'] = $user;
        $data['pass'] = $pass;
        $data['Specialities'] = $Specialities_Select;
        $data['Grades'] = $Grades_Select;
        $data['Nss'] = $Nss;
        $data['Month'] = $date;
        $data['Nom'] = $Nom;
        $data['Prenom'] = $prenom;
        $data['Mail'] = $mail;
        $data['Tel'] = $tel;
        $data['Date'] = $date;
        $data['Hopitals'] = $Hopitals_Select;
        $data['Services'] = $Services_Select;
        $data['DateRec'] = $daterec;
        $data['j'] = $j;
        $this->load->helper('url');
        $data['view_isi']='medecin/AjouterDoc';
        $this->load->helper('url');
        $this->load->view('layouts/template',$data);
    }
    public function getServices($id){
        $this->load->model("Service_model",'',True);
        $this->load->library('Form');
        $Services = $this->Service_model->getServiceByHopital($id);
        $Services_Select = $this->form->SelectForm("","Service",$Services,'id="Srv"');
        echo $Services_Select;
    }
    public function AddMed(){
        $this->load->model("Medecin_model", '', True);
        $this->load->model("Contrat_model",'',True);
        $this->load->model("Authentification_model",'',true);
        $Doc['NSS'] = $_POST['nss'];
        $Doc['nom'] = $_POST['nom'];
        $Doc['Specialite_id']= $_POST['Specialite'];
        $Doc['Grade_id'] = $_POST['Grade'];
        $Doc['prenom'] = $_POST['prenom'];
        $Doc['DateNaissance'] = $_POST['dateN'];
        $Doc['Tel'] = $_POST['tel'];
        $Doc['mail'] = $_POST['email'];
        $cont['Service_id'] = $_POST['Service'];
        $cont['Hopital_id'] = $_POST['Hopital'];
        $cont['Medecin_id'] = $_POST['nss'];
        $cont['etat'] = "Active";
        $cont['type'] = 'rec';
        $cont['DateDebut'] = $_POST['dateRec'];
        $this->Medecin_model->AddDoctor($Doc);
        $this->Contrat_model->AddContrat($cont);
        $j = $_POST['CtrNum'];
        for($i=1;$i<=$j;$i++){
            $cont['Service_id'] = $_POST['Srv'.$i];
            $cont['Hopital_id'] = $_POST['Hpt'.$i];
            $cont['Medecin_id'] = $_POST['nss'];
            $cont['type'] = $_POST['Type'.$i];
            $cont['DateDebut'] = $_POST['dateD'.$i];
            $cont['DateFin'] = $_POST['dateF'.$i];
            $cont['etat'] = "Avtive";
            $this->Contrat_model->AddContrat($cont);
        }
        $user['login'] = $_POST['user'];
        $user['password'] = $_POST['pass'];
        $user['user_type'] = 'med';
        $user['user_id'] = $_POST['nss'];
        $this->Authentification_model->Register($user);
        $this->load->helper('url');
        header('Location: '.base_url().'doc');
        die();
    }
    public function GetHpt($j){
        $this->load->model("Hopitale_model",'',True);
        $this->load->library('Form');
        $Hopitals = $this->Hopitale_model->getAll();
        $att = 'id = Hpt'.$j.' , onchange = "LoadServices(\''.'Hpt'.$j.'\',\'Srv'.$j.'\')"';
        $Hopitals_Select = $this->form->SelectFormT("","Hpt".$j,$Hopitals,$att,'nom');
        echo $Hopitals_Select;
    }
    public function DeleteMed($Nss){
        $this->load->model("Medecin_model", '', True);
        $this->Medecin_model->Delete($Nss);
    }
    public function ModifieForm($Nss)
    {
        $this->load->model("Speciality_model", '', True);
        $this->load->model("Grade_model", '', True);
        $this->load->model("medecin_model", '', True);
        $this->load->model("Hopitale_model", '', True);
        $this->load->model("Service_model", '', True);
        $this->load->model("Contrat_model",'',True);
        $this->load->library('Form');
        $Specialities = $this->Speciality_model->getAll();
        $Grades = $this->Grade_model->getAll();
        $Hopitals = $this->Hopitale_model->getAll();
        $Medecin = $this->medecin_model->getById($Nss);
        $engagement = $this->Contrat_model->getEngagement($Nss);
        $Nss = $this->form->input('nss', 'Code de Medecin : ', 'value="' . $Medecin->NSS . '" readonly');
        $j = $this->form->input('CtrNum', '', 'id="j" value="'.sizeof($engagement).'" style="display : none"');
        $Nom = $this->form->input('nom', 'Nom : ', 'value="' . $Medecin->Nom . '" readonly');
        $prenom = $this->form->input('prenom', 'Prénom : ', 'value="' . $Medecin->Prenom . '"');
        $date = $this->form->input('dateN', 'Date Naissance :  ', 'value="' . $Medecin->DateNaissance . '" readonly');
        $daterec = $this->form->date('dateRec', 'Date reccrutement : ','value="'.$Medecin->DateRecrutement.'"');
        $mail = $this->form->email('email', 'E-Mail : ', 'value="' . $Medecin->Mail . '"');
        $tel = $this->form->tel('tel', 'Telephone : ', 'value="' . $Medecin->Tel . '"');
        $att = 'id = Hpt , onchange = "LoadServices(\'Hpt\',\'Srv\')"';
        $Specialities_Select = $this->form->SelectedForm("Specialite : ", "Specialite", $Specialities, $Medecin->Specialite_id, 'readonly');
        $Grades_Select = $this->form->SelectedForm("Grade: ", "Grade", $Grades, $Medecin->Grade_id);
        $Hopitals_Select = $this->form->SelectedForm("Hopital : ", "Hopital", $Hopitals,$Medecin->hopital_id, $att, 'nom');
        $Services_Select = $this->form->SelectedForm("Service : ", "Service", $this->Service_model->getServiceByHopital($Medecin->hopital_id),$Medecin->service_id, 'id="Srv"');
        $data['Specialities'] = $Specialities_Select;
        $data['Grades'] = $Grades_Select;
        $data['Nss'] = $Nss;
        //$data['Month'] = $date;
        $data['Nom'] = $Nom;
        $data['Prenom'] = $prenom;
        $data['Mail'] = $mail;
        $data['Tel'] = $tel;
        $data['Hopitals'] = $Hopitals_Select;
        $data['Services'] = $Services_Select;
        $data['DateRec'] = $daterec;
        $data['j'] = $j;
        $data['Nmbr'] = sizeof($engagement) ;
        $cpt = 1;
        $contracts = [];
        foreach ($engagement as $e):
            $att = 'id = "Hpt'.$cpt.'" , onchange = "LoadServices(\'Hpt\',\'Srv\')"';
            $contracts[$cpt]["hopital"] = $this->form->SelectedFormT("", "Hpt".$cpt, $Hopitals,$e->Hopital_id, $att, 'nom');
            $contracts[$cpt]["service"] = $this->form->SelectedFormT("", "Srv".$cpt, $this->Service_model->getServiceByHopital($e->Hopital_id), $e->Service_id,'id = "Srv'.$cpt.'"');
            $contracts[$cpt]["type"] = $this->form->SimpleSelectedForm("", "type".$cpt, ['assistance','aide'], $e->type,'id = "Type'.$cpt.'"');
            $contracts[$cpt]["DateD"] = $this->form->dateT('dateD'.$cpt, '','value="'.$e->DateDebut.'" id = "dateD"'.$cpt.'" readonly');
            $contracts[$cpt]["DateF"] = $this->form->dateT('dateF'.$cpt, '','value="'.$e->DateFin.'" id = "dateF"'.$cpt.'" ');
            $contracts[$cpt]["id"] = $e->Numero;
            $cpt++;
        endforeach;
        $data['engagements'] = $contracts;
        $data['view_isi']='medecin/ModifierDoc';
        $data['date'] = $date;
        $this->load->helper('url');
        $this->load->view('layouts/template',$data);

    }
    public function Modifier(){
        $this->load->model("Medecin_model", '', True);
        $this->load->model("Contrat_model",'',True);
        $Doc['prenom'] = $_POST['prenom'];
        $Doc['NSS'] = $_POST['nss'];
        $Doc['nom'] = $_POST['nom'];
        $Doc['Specialite_id']= $_POST['Specialite'];
        $Doc['Grade_id'] = $_POST['Grade'];
        echo $_POST['Specialite'];
        $Doc['DateNaissance'] = $_POST['dateN'];
        $Doc['Tel'] = $_POST['tel'];
        $Doc['mail'] = $_POST['email'];
        $this->Medecin_model->ModifieDoc($Doc,$Doc['NSS']);
        $cont['Service_id'] = $_POST['Service'];
        $cont['Hopital_id'] = $_POST['Hopital'];
        $cont['Medecin_id'] = $_POST['nss'];
        $cont['DateDebut'] = $_POST['dateRec'];
        $cont['etat'] = "Active";
        $cont['type'] = 'rec';
        $this->Contrat_model->UpdateifExsists($cont);
        $j = $_POST['CtrNum'];
        for($i=1;$i<=$j;$i++){
            $cont['Service_id'] = $_POST['Srv'.$i];
            $cont['Hopital_id'] = $_POST['Hpt'.$i];
            $cont['Medecin_id'] = $_POST['nss'];
            $cont['type'] = $_POST['Type'.$i];
            $cont['DateDebut'] = $_POST['dateD'.$i];
            $cont['DateFin'] = $_POST['dateF'.$i];
            $cont['etat'] = "Active";
            $this->Contrat_model->UpdateifExsists($cont);
        }
        $this->load->helper('url');
        header('Location: '.base_url().'doc');
        die();
    }
    public function DeleteContrat($id){
        $this->load->model("Contrat_model",'',True);
        $this->Contrat_model->Delete($id);
    }
    public function getProfile($Nss){
        $this->load->model("medecin_model", '', True);
        $Medecin = $this->medecin_model->getById($Nss);
        //$engagement = $this->Contrat_model->getEngagement($Nss);
        $data['Medecin'] = $Medecin;
        $data['view_isi']='medecin/ProfileDoc';
        $this->load->helper('url');
        $this->load->view('layouts/template',$data);

    }

    public function LoginForm(){
        $this->load->view('medecin/login');
    }
    public function Login(){
        $log = $_POST['user'];
        $pass = $_POST['pass'];
        echo $log.'  '.$pass;
        $this->load->model("Authentification_model",'',true);
        $user = $this->Authentification_model->getUser($log,$pass);
        $this->load->helper('url');
       if($user){
            if($user[0]->user_type == 'med'){
                header('Location: '.base_url().'Myprofile/'.$user[0]->user_id);
                die();
            }
            if($user[0]->user_type == 'admin'){
                header('Location: '.base_url().'doc');
                die();
            }
        }else{
            header('Location: '.base_url().'login');
        }
    }

    public function getMyProfile($Nss){
        $this->load->model("medecin_model", '', True);
        $Medecin = $this->medecin_model->getById($Nss);
        //$engagement = $this->Contrat_model->getEngagement($Nss);
        $data['Medecin'] = $Medecin;
        $this->load->model("Contrat_model",'',True);
        $this->load->library('Form');

        $engagement = $this->Contrat_model->getEngagement($Nss);
        $Nss = $this->form->input('nss', 'Code de Medecin : ', 'value="' . $Medecin->NSS . '" readonly');
        $j = $this->form->input('CtrNum', '', 'id="j" value="'.sizeof($engagement).'" style="display : none"');
        $Nom = $this->form->input('nom', 'Nom : ', 'value="' . $Medecin->Nom . '" readonly');
        $prenom = $this->form->input('prenom', 'Prénom : ', 'value="' . $Medecin->Prenom . '"');
        $date = $this->form->date('dateN', 'Date Naissance :  ', 'value="' . $Medecin->DateNaissance . '" readonly');
        $daterec = $this->form->date('dateRec', 'Date reccrutement : ','value="'.$Medecin->DateRecrutement.'"');
        $mail = $this->form->email('email', 'E-Mail : ', 'value="' . $Medecin->Mail . '"');
        $tel = $this->form->tel('tel', 'Telephone : ', 'value="' . $Medecin->Tel . '"');
        $facebook = $this->form->input('facebook', 'Facebook :  ', 'value="' . $Medecin->facebook. '"');
        $twitter = $site = $this->form->input('twitter', 'Twitter :  ', 'value="' . $Medecin->twitter. '"');
        $data['date'] = $date;
        $data['Site'] =$this->form->input('site', 'Site : ', 'value="' . $Medecin->Site. '"');
        $data['Facebook'] = $facebook;
        $data['Twitter'] = $twitter;
        $data['Nss'] = $Nss;
        $data['Nom'] = $Nom;
        $data['Prenom'] = $prenom;
        $data['Mail'] = $mail;
        $data['Tel'] = $tel;
        $data['DateRec'] = $daterec;
        $data['j'] = $j;
        $data['Nmbr'] = sizeof($engagement) ;
        $cpt = 1;
        $contracts = [];
        foreach ($engagement as $e):
            $att = 'id = "Hpt'.$cpt.'" , onchange = "LoadServices(\'Hpt\',\'Srv\')"';
            $contracts[$cpt]["hopital"] = $this->form->SelectedFormT("", "Hpt".$cpt, $Hopitals,$e->Hopital_id, $att, 'nom');
            $contracts[$cpt]["service"] = $this->form->SelectedFormT("", "Srv".$cpt, $this->Service_model->getServiceByHopital($e->Hopital_id), $e->Service_id,'id = "Srv'.$cpt.'"');
            $contracts[$cpt]["type"] = $this->form->SimpleSelectedForm("", "type".$cpt, ['assistance','aide'], $e->type,'id = "Type'.$cpt.'"');
            $contracts[$cpt]["DateD"] = $this->form->dateT('dateD'.$cpt, '','value="'.$e->DateDebut.'" id = "dateD"'.$cpt.'" readonly');
            $contracts[$cpt]["DateF"] = $this->form->dateT('dateF'.$cpt, '','value="'.$e->DateFin.'" id = "dateF"'.$cpt.'" ');
            $contracts[$cpt]["id"] = $e->Numero;
            $cpt++;
        endforeach;
        $data['engagements'] = $contracts;
        $data['view_isi']='medecin/MyProfile';

        $this->load->helper('url');
        $this->load->view('layouts/template',$data);
    }

    public function ModifierMyInfo(){
        $this->load->model("Medecin_model", '', True);
        $Doc['prenom'] = $_POST['prenom'];
        $Doc['NSS'] = $_POST['nss'];
        $Doc['nom'] = $_POST['nom'];
        $Doc['DateNaissance'] = $_POST['dateN'];
        $Doc['Tel'] = $_POST['tel'];
        $Doc['mail'] = $_POST['email'];
        $Doc['facebook'] = $_POST['facebook'];
        $Doc['Site'] = $_POST['site'];
        $Doc['twitter'] = $_POST['twitter'];
        $this->Medecin_model->ModifieDoc($Doc,$Doc['NSS']);

        $this->load->helper('url');
        header('Location: '.base_url().'Myprofile/'.$Doc['NSS']);
    }
}