<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index() {


        // Chargement de la vue
        $this->data['title'] = '';
        $this->data['subview'] = 'front_office/home/main';


        $this->load->view('components_home/main', $this->data);

    }




}
