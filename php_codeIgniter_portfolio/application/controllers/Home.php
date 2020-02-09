<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index() {

		$this->data['css'] = $this->layout->add_css(array(
			'assets/plugins/bootstrap/css/bootstrap.min',
			'assets/css/styles',
			'assets/css/portfolio_home'
		));
		// Chargement des JS
		$this->data['js'] = $this->layout->add_js(array(
			'assets/plugins/bootstrap/js/bootstrap.min',
			'assets/js/home'


		));

        // Chargement de la vue
        $this->data['title'] = '';
        $this->data['subview'] = 'front_office/home/main';


        $this->load->view('components_home/main_home', $this->data);

    }




}
