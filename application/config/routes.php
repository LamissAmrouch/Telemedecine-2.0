<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['exemple'] = 'medController/get';
$route['test'] = 'medController/getDoctors';
$route['doc'] = 'medController/getDoctors';
$route['med/(:num)'] = 'medController/getMed/$1';
$route['medf'] = 'medController/MedFilter';
$route['ajouter'] = 'medController/AddMedForm';
$route['services/(:num)'] = 'medController/getServices/$1';
$route['ajouter/Doc'] = 'medController/AddMed';
$route['Hopitale/(:num)'] = 'medController/GetHpt/$1';
$route['Doc/Manipuler'] = 'medController/getMedListe';
$route['Doctor/Delete/(:num)'] = 'medController/DeleteMed/$1';
$route['Doctor/Edite/(:num)'] = 'medController/ModifieForm/$1';
$route['Modifier/Doc'] = 'medController/Modifier';
$route['Delete/Contrat/(:num)'] = 'medController/DeleteContrat/$1';
$route['Doctor/profile/(:num)'] = 'medController/getProfile/$1';
$route['Doctor/Agenda/(:num)/(:num)'] = 'AgendaController/getMounth/$1/$2';
$route['Doctor/Agenda'] = 'AgendaController/getCurrentMounth/';
$route['Doctor/AjouterDispo/(:num)'] = 'AgendaController/DispoForm/$1';
$route['Ajouter/Dispo/(:num)'] = 'AgendaController/AjouterDispo/$1';
$route['login'] = 'medController/LoginForm';
$route['log'] = 'medController/Login';
$route['Myprofile/(:num)'] = 'medController/getMyProfile/$1';
$route['Modifier/Myinfo'] = 'medController/ModifierMyInfo';
$route['Seance/list'] = 'SeanceController/listSeance';
$route['Seance/Detaille/(:num)'] = 'SeanceController/getSeance/$1';
$route['Seance/planifier/(:num)'] = 'SeanceController/planningForm/$1';
$route['Seance/Ajouter/(:num)'] = 'SeanceController/add_event/$1';