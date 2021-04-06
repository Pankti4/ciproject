<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

Class ManageUsers_Model extends CI_Model
{
	public function getusersdetails()
	{
		$query=$this->db->select('firstName,lastName,emailId,regDate,id')
		              ->get('tblusers');
		        return $query->result();      
	}

 public function getuserdetail($uid)
 {
 	$ret=$this->db->select('firstName,lastName,emailId,regDate,id,mobileNumber,lastUpdationDate')
 	              ->where('id',$uid)
 	              ->get('tblusers');
 	                return $ret->row();
 }

  public function deleteuser($uid)
  {
	$sql_query=$this->db->where('id', $uid)
                ->delete('tblusers');
            }
}