<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

	// La méthode profil qui sera appelé a un paramètre "$id". Dans notre exemple, il vaudra 1.
 	public function contenu($id) {

		$this->load->database();
        $this->load->helper('form');
		$this->load->helper('url_helper');
		$this->load->view('v_entete');
		$this->load->view('v_bandeau');
 

 		switch ($id) {
 			case 'catalogue':
 			$this->load->model('main_model');
 			$data['donnees']=$this->main_model->afficheProduits();
 			$data['test']=$this->main_model->lesreferences();
 			$this->load->view('v_catalogue',$data);
 			break;

			case 'enregistrer':
 				$this->load->view('v_enregistrer');
 				break;

 			case 'panier':
 				$this->load->view('v_panier');
 				break;

 			case 'admin':
 				$this->load->view('v_admin');
 				break;

			case 'connecter':
 				$this->load->view('v_connecter');
 				break;
 				
 			default :
 				$this->load->view('v_accueil');
 			}
 			$this->load->view('v_finPage');

 	}

	public function index()
	{
		$this->load->helper('url_helper');
		$this->load->view('v_entete');
		$this->load->view('v_bandeau');
		$this->load->view('v_accueil');
		$this->load->view('v_finPage');
	}
}
