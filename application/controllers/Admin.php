<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this -> load -> helper('url');
		$this -> load -> helper('form');
        $this -> load -> model('cvmodel');
		$this -> load -> database();
		$this->load->library('session');
	}
	// start of login section
    public function index()
	{
		// checking th esession to see if the user is logged in
		if($this->session->userdata('userId') != '') {redirect('admin/dashboard');return;}
		$this->load->view('admin/index.php');
	}

	public function validate_user()
	{
        $username = $_POST['username'];
		$password = $_POST['password'];
        $data = [];
        $user = $this -> ess_model -> validate_user($username,$password);
        if ($user->num_rows() == 0)
        {
            session_start();
            $_SESSION['errors']= "Incorrect Details Provided";
            redirect('admin/');
            return;
        }

        $row =  $user->row();
		$this->session->set_userdata('userId', ''.$row -> UserId);
		$this->session->set_userdata('userUName', ''.$row -> UserName);
		$this->session->set_userdata('userPassword', ''.$row -> Password);
		redirect('admin/dashboard');
	}

	// end of login section

	// start of logout section
    public function logout()
	{
		$this->session->set_userdata('userId', '');
		redirect('admin/dashboard');
	}
	// end of logout section
	// start of admin dashboard
	public function dashboard()
	{
		// checking th esession to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
        $data = [];
		$jobopenings = $this -> cvmodel -> get_jobopenings();
		$applications = $this -> cvmodel -> get_applicants();

		$data['noofjobopenings'] =  $jobopenings->num_rows();
		$data['noofapplications'] =  $applications->num_rows();
		$data['page'] =  "dashboard";
		
		$this->load->view('admin/dashboard.php', $data);
	}
	// end of admin dashboard

	// ----------------------------------- job Applications section ----------------------
	// view all applications
	public function applications()
	{
		// checking the session to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
        $data = [];
		$data['page'] =  "applications";
		$data['applications'] = $this -> cvmodel -> get_applicants();
		$data['jobopenings'] = $this -> cvmodel -> get_jobopenings();
		
		$this->load->view('admin/viewapplications.php',$data);
	}
	// view single application
	public function previewapplicant($id)
	{
		// checking the session to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
        $data = [];
		$data['page'] =  "applications";

		$applicant = $this -> cvmodel -> get_applicationinfo($id);
        if ($applicant->num_rows() == 0)
        {
            $this->load->view('error_404');
            return;
        }

        $data['applicantinfo'] =  $applicant->row();

		$this->load->view('admin/viewapplicant.php',$data);
	}

	public function filter($id)
	{
		// checking the session to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
        $data = [];
		$data['page'] =  "applications";
		// getting the job info
		$job = $this -> cvmodel -> get_jobopeninginfo($id);
        if ($job->num_rows() == 0)
        {
            $this->load->view('error_404');
            return;
        }
        $data['jobinfo'] =  $job->row();
		$datacourses = explode(',', $job->row() -> RequiredCourse);
		$datajobs = explode(',', $job->row() -> RequiredJobTitle);
		
		// generate courses query
		$coursesquery = "";
		$count = 0;
		foreach ($datacourses as $item) { 
			if($count == 0){$coursesquery .= " and (course like '%".trim($item)."%'"; $count = 1; }
			else{$coursesquery .= " or course like '%".trim($item)."%'"; }
		}
		$coursesquery .= ")";

		// generate jobs query
		$jobsquery = "";
		$count = 0;
		foreach ($datajobs as $item) { 
			if($count == 0){$jobsquery .= " and (previousposition like '%".trim($item)."%'"; $count = 1; }
			else{$jobsquery .= " or previousposition like '%".trim($item)."%'"; }
		}
		$jobsquery .= ")";

		// testing the query
		// echo $coursesquery;
		// echo $jobsquery;
		
		// getting the matched applications
		$data['applications'] = $this -> cvmodel -> get_filteredapplicants($id, $coursesquery, $jobsquery);
		$data['jobopenings'] = $this -> cvmodel -> get_jobopenings();
		

		$this->load->view('admin/filterapplications.php',$data);
	}
	
	
	// ------------------------------------ job openings section -------------------------
	// view all jobopenings
	public function jobopenings()
	{
		// checking the session to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
        $data = [];
		$data['page'] =  "jobopenings";
		$data['jobopenings'] = $this -> cvmodel -> get_jobopenings();
		
		$this->load->view('admin/jobopenings.php',$data);
	}
	// add job opening
	public function addjobopening()
	{
		// checking the session to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
		$data = [];
		$data['page'] =  "jobopenings";
		
		$this->load->view('admin/addjobopening.php',$data);
	}
	// performing the actual insertion
	public function add_jobopening()
	{
		// checking the session to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
		// getting the information submitted
		$Position = $_POST['position'];
		$RequiredCourse = $_POST['requiredcourse'];
		$RequiredGrade = $_POST['requiredgrade'];
		$RequiredJobTitle = $_POST['requiredjobtitle'];
		$RequiredJobDuration = $_POST['requiredjobduration'];
		$RequiredEmploymentStatus = $_POST['requiredemploymentstatus'];
		
		// compiling the information submitted into an array
		$data = array(
			'Position' => $Position,
			'RequiredCourse' => $RequiredCourse,
			'RequiredGrade' => $RequiredGrade,
			'RequiredJobTitle' => $RequiredJobTitle,
			'RequiredJobDuration' => $RequiredJobDuration,
			'RequiredEmploymentStatus' => $RequiredEmploymentStatus
		);
		// inserting into the database
		$status = $this -> cvmodel -> addjobopening($data);
		// action if insert was successful
		if($status){redirect('admin/jobopenings');}
		// if not successful
		else{redirect('admin/addjobopening');}
	}
	// edit job opening page
	public function editjobopening($id)
	{
		// checking the session to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
		$data = [];
		$data['page'] =  "jobopenings";

		$job = $this -> cvmodel -> get_jobopeninginfo($id);
        if ($job->num_rows() == 0)
        {
            $this->load->view('error_404');
            return;
        }

        $data['jobinfo'] =  $job->row();
		$this->load->view('admin/editjobopening.php',$data);
	}
	// performing the actual edit
	public function edit_jobopening()
	{
		// checking the session to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
		// getting the information submitted
		$entryid = $_POST['entryid'];
		$Position = $_POST['position'];
		$RequiredCourse = $_POST['requiredcourse'];
		$RequiredGrade = $_POST['requiredgrade'];
		$RequiredJobTitle = $_POST['requiredjobtitle'];
		$RequiredJobDuration = $_POST['requiredjobduration'];
		$RequiredEmploymentStatus = $_POST['requiredemploymentstatus'];
		
		// compiling the information submitted into an array
		$data = array(
			'Position' => $Position,
			'RequiredCourse' => $RequiredCourse,
			'RequiredGrade' => $RequiredGrade,
			'RequiredJobTitle' => $RequiredJobTitle,
			'RequiredJobDuration' => $RequiredJobDuration,
			'RequiredEmploymentStatus' => $RequiredEmploymentStatus
		);
		// inserting into the database
		$status = $this -> cvmodel -> updatejobopening($data,$entryid);
		// action if insert was successful
		if($status){redirect('admin/jobopenings');}
		// if not successful
		else{redirect('admin/editjobopening/'.$entryid);}
	}
	// deleting a job opening
	public function deletejobopening($id){
		// checking the session to see if the user is logged in
		// if($this->session->userdata('userId') == '') {redirect('admin/');return;}
        $data = [];
        $status = $this -> cvmodel -> deletejobopening($id);
        if ($status)
        {
			redirect('admin/jobopenings');
            return;
        }

		redirect('admin/jobopenings');
	}
	// ------------------------------------------------------------------------------------------
}