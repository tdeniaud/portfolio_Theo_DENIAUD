<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Content_model','contentManager');

	}

	public function index() {


		$experiences = $this->contentManager->getCV("*","section","XP");
		$this->data['experiences'] = $experiences;
		$formations = $this->contentManager->getCV("*","section","FORMATION");
		$this->data['formations'] = $formations;



		$this->data['css'] = $this->layout->add_css(array(
			'assets/css/portfolio_home'
		));
		// Chargement des JS
		$this->data['js'] = $this->layout->add_js(array(
			'assets/js/home',
			'assets/js/contact_validation'

		));

        // Chargement de la vue
        $this->data['subview'] = 'front_office/home/main';


        $this->load->view('components_home/main', $this->data);
    }


	public function enregistrer() {

		$dataRecues = $this->input->post();

		$rulesArray = array(
			array(
				'field' => 'Prenom',
				'label' => 'Prenom',
				'rules' => 'trim|required|min_length[3]|max_length[25]'
			),
			array(
				'field' => 'Nom',
				'label' => 'Nom',
				'rules' => 'trim|required|min_length[3]|max_length[50]'
			),
			array(
				'field' => 'Email',
				'label' => 'Email',
				'rules' => 'trim|valid_email|required|min_length[8]'
			),array(
				'field' => 'Entreprise',
				'label' => 'Entreprise',
				'rules' => 'trim|min_length[3]|max_length[75]'
			),
			array(
				'field' => 'Message',
				'label' => 'Message',
				'rules' => 'required|max_length[255]'
			)
		);

		$this->form_validation->set_rules($rulesArray);

		if ($this->form_validation->run() === FALSE) {

			$errorsArray = $this->form_validation->get_all_errors();

			header('Content-type:application/json');
			echo json_encode(array(
				'error' => $errorsArray
			));

		} else {

			$data['prenom'] = htmlspecialchars($this->input->post('Prenom'));
			$data['nom'] = htmlspecialchars($this->input->post('Nom'));
			$data['societe'] = htmlspecialchars($this->input->post('Entreprise'));
			$data['email'] = htmlspecialchars($this->input->post('Email'));
			$this->db->insert('contact', $data);

			$id_contact =  $this->contentManager->getContact($data['email']);

			$message['id_contact'] = $id_contact->id;

			$message['contenu'] = htmlspecialchars($this->input->post('Message'));

			$message['updated_at'] = date('Y-m-d H:i:s');

			$this->db->insert('message', $message);
		}

	}




}
