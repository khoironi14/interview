<?php

/**
 * 
 */
class Model_welcome extends CI_Model
{
function login($data){

	return $this->db->get_where('account',$data);
}	
function account(){

	return $this->db->get('account');
}	
}




?>