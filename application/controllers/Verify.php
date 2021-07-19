<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this -> load -> helper('url');
        $this -> load -> model('ess_model');
		$this -> load -> database();
	}

	public function index($id)
	{
		$this -> load -> helper('form');
        $data = [];
        $product = $this -> ess_model -> get_applicant_details($id);
        if ($product->num_rows() == 0)
        {
            $this->load->view('error_404');
            return;
        }
		// updating the number of times the page has been opened
		$this -> ess_model -> update_applicants_view($id);
		
        $data['documentinfo'] =  $product->row();

		$this->load->view('verify/index.php',$data);
	}

    
}