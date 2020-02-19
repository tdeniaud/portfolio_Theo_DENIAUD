<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Content_model','contentManager');

	}

	public function index() {


		// Chargement des CSS
		$this->data['css'] = $this->layout->add_css(array(
			'assets/css/portfolio_home',
			'assets/css/panel'
		));



        // Chargement de la vue
        $this->data['subview'] = 'front_office/panel/main';


        $this->load->view('components_home/main_logged', $this->data);
    }



}
