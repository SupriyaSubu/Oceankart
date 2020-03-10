<?php

class Register_m extends CI_Model{

	function insertcus($data){
		$this->db->insert('cregister',$data);
		return true;
		}	
	/*function insertmer($data){
		$this->db->insert('mregister',$data);
		return true;
	}*/

	function login1($cemail, $cpass){
		$this->db->where('cemail', $cemail);
		$this->db->where('cpass', $cpass);
		$query = $this->db->get('cregister');
		if($query->num_rows() > 0 ){
					return true;
			}
			else
			{
					return false;
			}
	}
	/*function login2($memail, $mpass){
		$this->db->where('memail', $memail);
		$this->db->where('mpass', $mpass);
		$query = $this->db->get('mregister');
		if($query->num_rows() > 0 ){
					return true;
			}
			else
			{
					return false;
			}
	}
*/
}
?>