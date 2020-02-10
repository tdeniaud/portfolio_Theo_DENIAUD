<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Content_model','contentManager');

	}

	public function index() {

		$this->data['css'] = $this->layout->add_css(array(
			'assets/css/portfolio_home'
		));
		// Chargement des JS
		$this->data['js'] = $this->layout->add_js(array(
			'assets/js/home'

		));

		//$this->data['contenu'] = $this->contentManager->getContent("*");

        // Chargement de la vue
        $this->data['title'] = '';
        $this->data['subview'] = 'front_office/home/main';


        $this->load->view('components_home/main_home', $this->data);

    }


	public function saveMessage() {

		$dataRecues = $this->input->post();

		$rulesArray = array(
			array(
				'field' => 'Prénom',
				'label' => 'Prénom',
				'rules' => 'trim|required|min_length[6]'
			),
			array(
				'field' => 'Nom',
				'label' => 'Nom',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'Email',
				'label' => 'Email',
				'rules' => 'trim|required|valid_email'
			),
			array(
				'field' => 'Personnalité',
				'label' => 'Personnalité',
				'rules' => 'required'
			),
			array(
				'field' => 'Objet',
				'label' => 'Objet',
				'rules' => 'required'
			),
			array(
				'field' => 'Message',
				'label' => 'Message',
				'rules' => 'required'
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

			$data['fname'] = $this->input->post('Prénom');
			$data['lname'] = $this->input->post('Nom');
			$data['email'] = $this->input->post('Email');
			$data['message'] = $this->input->post('Message');

			$data['updated_at'] = date('Y-m-d H:i:s');

			$this->db->insert('message', $data);


		}

	}




}
