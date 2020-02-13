<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Content_model','contentManager');

	}

	public function index() {


		$experiences = $this->contentManager->getContent("*","section","XP");
		$this->data['experiences'] = $experiences;
		$formations = $this->contentManager->getContent("*","section","FORMATION");
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
				'rules' => 'trim|required|min_length[3]|min_length[25]'
			),
			array(
				'field' => 'Nom',
				'label' => 'Nom',
				'rules' => 'trim|required|min_length[3]|max_length[50]'
			),
			array(
				'field' => 'Email',
				'label' => 'Email',
				'rules' => 'trim|valid_email'
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

			console.log('ok');

		}

	}




}
