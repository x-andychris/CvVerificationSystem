<?php

    class cvmodel extends CI_model{
        function __construct(){
            parent:: __construct();
        }

        // -------------------------------- Application Section ------------------------------------

        // creating an insert function
        public function addapplicant($applicant){
            // if statement to handle insert success
            if($this -> db -> insert("applications",$applicant)){
                return true;
            }
        }

        // getting all applications
        public function get_applicants(){
            $details=$this -> db-> query("select * from Applications");
            return $details;
        }

        // getting a specific applicant using the entry id
        public function get_applicationinfo($id){
            $details=$this -> db-> query("select * from Applications where ApplicantId = '$id'");
            return $details;
        }

        // getting a specific applicant using the entry id
        public function get_filteredapplicants($id, $coursesquery, $jobsquery){
            $details=$this -> db-> query("select * from Applications where intendedposition = '$id' $coursesquery $jobsquery");
            return $details;
        }
        
        // ---------------------------------------- Job Openings Section -------------------------------
        // adding a job opening
        public function addjobopening($job){
            // if statement to handle insert success
            if($this -> db -> insert("jobopenings",$job)){
                return true;
            }
        }
        // getting all job openings
        public function get_jobopenings(){
            $details=$this -> db-> query("select * from JobOpenings");
            return $details;
        }
        // getting a specific job opening using entry id
        public function get_jobopeninginfo($id){
            $details=$this -> db-> query("select * from JobOpenings where EntryId = '$id'");
            return $details;
        }
        // updating an job opening
        public function updatejobopening($data,$entryid){
            
            $this -> db -> set($data);

            // specifying the column/ condidtion where the update would be made
            $this -> db -> where("EntryId",$entryid);

            // actual update
            if($this -> db -> update("JobOpenings",$data)){
                return true;
            }
        }
        // delete a job opening
        public function deletejobopening($entryid){
            // if statement to handle delete success
            if($this -> db -> delete("JobOpenings","EntryId =".$entryid)){
                return true;
            }
        }

        // ---------------------------------------- Admin Validation Section -------------------------------
        
        // validating a user
        public function validate_user($uname,$pwd){
            $details=$this -> db-> query("select * from Admin where UserName = '$uname' && Password = '$pwd' ");
            return $details;
        }

        // update statement for the admin info
        public function updateprofile($data,$id){
            
            $this -> db -> set($data);

            // specifying the column/ condidtion where the update would be made
            $this -> db -> where("UserId",$id);

            // actual update
            if($this -> db -> update("Users",$data)){
                return true;
            }
        }
    }

?>