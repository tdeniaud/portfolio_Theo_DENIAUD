<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','userManager');
		$this->load->model('content_model','contentManager');

		// Si je ne suis pas connecté
		if(!$this->logged or !($this->admin)){
			redirect();
		}
		// Chargement des JS
		$this->data['js'] = $this->layout->add_js(array(
			'assets/js/user'
		));


	}

	public function index() {


		// Chargement des CSS
		$this->data['css'] = $this->layout->add_css(array(
			'assets/css/portfolio_home',
			'assets/css/panel'
		));



        // Chargement de la vue
        $this->data['subview'] = 'front_office/panel/main';


		$this->data['nbMessages'] = $this->contentManager->getContent("COUNT(*) as messages","Message",null,null,"row");
		$this->data['nbRecommandations'] = $this->contentManager->getContent("COUNT(*) as recommandations","recommandation",null,null,"row");
		$this->data['nbUsers'] = $this->contentManager->getContent("COUNT(*) as users","users",null,null,"row");

		$this->data['recommandations'] = $this->contentManager->getContent("*","recommandation","etat","A");


		$this->data['users'] = $this->userManager->getUser('*');

		$this->data['messages'] = $this->contentManager->getContent("*","Message");




		$this->load->view('components_home/main_logged', $this->data);
    }



	public function getviewedit()
	{

		$rulesArray = array(
			array(
				'field' => 'user_id',
				'label' => 'id',
				'rules' => 'trim|required|integer'
			)
		);

		$this->form_validation->set_rules($rulesArray);

		if ($this->form_validation->run() === FALSE) {

			header('Content-type:application/json');
			echo json_encode(array(
				'error' => "Un problème est survenue"
			));

		} else {

			$this->data['user'] = $this->userManager->getUser('*', 'id', $this->input->post('user_id'), $returnType = 'row');
			$view = $this->load->view('front_office/panel/form_edit', $this->data, true); // boolean true pour permet de mettre la view dans une variable

			//renvoie en JSON succes + view
			header('Content-type:application/json');
			echo json_encode(array(
				'view' => $view,
			));
		}

	}
	public function getviewdelete()
	{

		$rulesArray = array(
			array(
				'field' => 'user_id',
				'label' => 'id',
				'rules' => 'trim|required|integer'
			)
		);

		$this->form_validation->set_rules($rulesArray);

		if ($this->form_validation->run() === FALSE) {
			//echo 'Erreur';
			header('Content-type:application/json');
			echo json_encode(array(
				'error' => "Un problème est survenue"
			));

		} else {

			$this->data['user'] = $this->userManager->getUser('*', 'id', $this->input->post('user_id'), $returnType = 'row');

			$view = $this->load->view('front_office/panel/form_delete', $this->data, true); // boolean true pour permet de mettre la view dans une variable

			header('Content-type:application/json');
			echo json_encode(array(
				'view' => $view,
			));
		}
	}
	public function edit() {


		$rulesArray = array(
			array(
				'field' => 'id',
				'label' => 'id',
				'rules' => 'trim|required|integer'
			),
			array(
				'field' => 'pseudo_edit',
				'label' => 'pseudo',
				'rules' => 'trim|required|min_length[6]'
			),
			array(
				'field' => 'email_edit',
				'label' => 'email',
				'rules' => 'trim|required|valid_email'
			),
		);

		$this->form_validation->set_rules($rulesArray);

		if ($this->form_validation->run() === FALSE) {

			$errorsArray = $this->form_validation->get_all_errors();

			header('Content-type:application/json');
			echo json_encode(array(
				'error' => $errorsArray
			));
			die();

		} else {

			// On récupère les infos de l'utyilisateur à modifier
			$user = $this->userManager->checkExistUser(array('id' => $this->input->post('id')));

			if($user){
				// Vérifier que le pseudo n'existe pas ailleur en bdd
				if($user->use_pseudo != $this->input->post('pseudo_edit')){
					$otherme = $this->userManager->checkExistUserNotMe(array('use_pseudo' => $this->input->post('pseudo_edit')), $this->input->post('id'));

					// Récupère tous les utilisateurs dans la bdd WHERE use_pseudo = $this->input->post('pseudo_edit') AND id != $this->input->post('id')
					if($otherme){
						header('Content-type:application/json');
						echo json_encode(array(
							'error' => "Un utilisateur utilise déjà ce pseudo"
						));
						die();
					}
				}

				// Vérifier que l'email n'existe pas ailleur en bdd
				if($user->use_email != $this->input->post('email_edit')){
					$otherme = $this->userManager->checkExistUserNotMe(array('use_email' => $this->input->post('email_edit')), $this->input->post('id'));
					// Récupère tous les utilisateurs dans la bdd WHERE use_pseudo = $this->input->post('pseudo_edit') AND id != $this->input->post('id')
					if($otherme){
						header('Content-type:application/json');
						echo json_encode(array(
							'error' => "Un utilisateur utilise déjà cette email"
						));
						die();
					}
				}
			} else {
				header('Content-type:application/json');
				echo json_encode(array(
					'error' => "Utilisateur introuvable"
				));
				die();

			}


			$dataUpdate = array(
				"use_pseudo" => $this->input->post('pseudo_edit'),
				"use_email" => $this->input->post('email_edit'),
				"updated_at" => date('Y-m-d H:i:s')
			);
			$dataWhere = array(
				'id' => $this->input->post('id')
			);

			$this->userManager->updateUser($dataUpdate,$dataWhere);
			echo json_encode(array(
				'success' => 'Les modifications ont été pris en compte'
			));
		}



	}

	public function deleteUser(){

	}

}
