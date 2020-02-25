<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Content_model','contentManager');

	}

	public function index() {


		$experiences = $this->contentManager->getContent("*","CV","section","XP");
		$this->data['experiences'] = $experiences;
		$formations = $this->contentManager->getContent("*","CV","section","FORMATION");
		$this->data['formations'] = $formations;

		$recommandations = $this->contentManager->getContent("*","recommandation","etat","V");

		if($recommandations) {
			$this->data['recommandations'] = $recommandations ;

		}
		else {
			$this->data['recommandations'] = false;
		}

		// Chargement des CSS
		$this->data['css'] = $this->layout->add_css(array(
			'assets/css/portfolio_home',


		));

		$this->data['js'] = $this->layout->add_js(array(
			'assets/js/nav'
		));

        // Chargement de la vue
        $this->data['subview'] = 'front_office/home/main';


        $this->load->view('components_home/main', $this->data);
    }



}
