<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this -> load -> helper('url');
		$this -> load -> helper('form');
        $this -> load -> model('cvmodel');
		$this -> load -> database();
		$this->load->library('session');
	}

	public function index()
	{
		$data = [];
		$data['jobopenings'] = $this -> cvmodel -> get_jobopenings();
		
		$this->load->view('home/index.php',$data);
	}

	public function add_application(){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone= $_POST['phone'];
		$country= $_POST['country'];
		$jobposition= $_POST['jobposition'];
		$institution= $_POST['institution'];
		$course= $_POST['course'];
		$degreeobtained= $_POST['degreeobtained'];
		$organization= $_POST['organization'];
		$jobtitle= $_POST['jobtitle'];
		$workduration= $_POST['workduration'];
		$employmentstatus= $_POST['employmentstatus'];

		// generating a new file name
		$newfilename = "";
		$exploded = explode(".",$_FILES["file"]["name"]);
		try{$newfilename = time() . '_' . rand(100, 999) . '.' . end($exploded);}
		catch(Exception $e){}
		
		// compiling the information into an array
		$data = array(
			'fullname' => $name,
			'email' => $email,
			'phone' => $phone,
			'country' => $country,
			'intendedposition' => $jobposition,
			'institution' => $institution,
			'course' => $course,
			'degree' => $degreeobtained,
			'previousorganization' => $organization,
			'previousposition' => $jobtitle,
			'workduration' => $workduration,
			'employmentstatus' => $employmentstatus,
			'resume' => $newfilename,
		);
		
		// configuring the file
		$config['allowed_types'] = 'jpg|png|pdf|docx';
		$config['upload_path'] = './assets/documents/';
		$config['file_name'] = $newfilename;
		$this -> load -> library('upload',$config);
		// performing upload and checking if it was successful
		if($this -> upload -> do_upload('file')){
			// inserting into the database if file upload was successful
			$status = $this -> cvmodel -> addapplicant($data);
			// action if insert was successful
			if($status){redirect('admin/applications');}
			// if not successful
			else{redirect('home/index');}
		}else{
			redirect('home/index');
		}
	}
	// end of add applicant document

    
}