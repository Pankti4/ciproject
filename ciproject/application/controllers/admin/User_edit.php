<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_edit extends CI_Controller
 {
public function updateprofile()
{
$this->form_validation->set_rules('firstname','First Name','required|alpha');
$this->form_validation->set_rules('lastname','Last  Name','required|alpha');
$this->form_validation->set_rules('mobilenumber','Mobile Number','required|numeric|exact_length[10]');
if($this->form_validation->run())
{
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$mnumber=$this->input->post('mobilenumber');
$userid = $this->session->userdata('uid');
$this->User_Profile_Model->update_profile($fname,$lname,$mnumber,$userid);
$this->session->set_flashdata('success','Profile updated successfull.');
return redirect('admin/Manage_users');
}
 else 
{
	$this->session->set_flashdata('error', 'Something went wrong. Please try again with valid format.');
	redirect('admin/Manage_users');
}
}
}