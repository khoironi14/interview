<?php
/**
 * 
 */
class Pos extends CI_Controller
{
	
	function index(){

		$data['post']=$this->db->get('post')->result();
		$data['content']='view_pos';
		$this->load->view('dashboard',$data);
	}
	function new(){

		if (isset($_POST['simpan'])) {
			$data=[
				'title'=>$this->input->post('title'),
				'content'=>$this->input->post('isi'),
				'date'=>date('Y-m-d H:i:s'),
				'username'=>$this->session->userdata('username')
			];
			$this->db->insert('post',$data);
			redirect('Pos/index');
		}else{

			$data['content']='add_post';
		$this->load->view('dashboard',$data);
		}
}
}

?>