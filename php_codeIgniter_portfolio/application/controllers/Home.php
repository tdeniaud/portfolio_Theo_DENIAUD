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
			'assets/css/styles'
		));
		// Chargement des JS
		$this->data['js'] = $this->layout->add_js(array(
			'assets/plugins/jquery-3.3.1.min',
			'assets/plugins/bootstrap/js/bootstrap.min',
			'assets/js/typewriter'

		));

        // Chargement de la vue
        $this->data['title'] = '';
        $this->data['subview'] = 'front_office/home/main';


        $this->load->view('components_home/main_home', $this->data);

    }




}
