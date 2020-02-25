<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mention extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Content_model','contentManager');

	}

	public function index() {


		/*$this->data['css'] = $this->layout->add_css(array(

		));*/

		// Chargement des JS
		$this->data['js'] = $this->layout->add_js(array(
			'assets/js/nav'



		));

        // Chargement de la vue
        $this->data['subview'] = 'front_office/mention/main';


        $this->load->view('components_home/main', $this->data);
    }



}
