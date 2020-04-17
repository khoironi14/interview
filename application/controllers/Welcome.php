<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_welcome');
	}
	public function index()
	{
		if (isset($_POST['login'])) {
			$data=[
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))

			];

			$cek=$this->Model_welcome->login($data);
			if ($cek->num_rows() >0) {
				foreach ($cek->result() as $data) {
					$ses['username']=$data->username;
					$ses['role']=$data->role;
				}
				$this->session->set_userdata($ses);
				redirect('Welcome/home');
			}
		}else{

			$this->load->view('login');
		}
	}
	function home(){

		$data['content']='home';
		$this->load->view('dashboard',$data);
	}

	function account(){
$data['akun']=$this->Model_welcome->account()->result();
$data['content']='view_akun';
		$this->load->view('dashboard',$data);

	}
	function new(){

		if (isset($_POST['simpan'])) {
			$data=[
				'name'=>$this->input->post('nama'),
				'username'=>$this->input->post('username'),

				'password'=>md5($this->input->post('password')),
				'role'=>$this->input->post('role'),
			];
			$this->db->insert('account',$data);
			redirect('Welcome/account');
		}else{

			$data['content']='add_akun';
		$this->load->view('dashboard',$data);
		}
	}

	function edit_akun(){

		if (isset($_POST['simpan'])) {
			$user=$this->input->post('user');
			$data=[
				'name'=>$this->input->post('nama'),
				'username'=>$this->input->post('username'),

				'password'=>md5($this->input->post('password')),
				'role'=>$this->input->post('role'),
			];
			$this->db->where('username',$user);
			$this->db->update('account',$data);
			redirect('Welcome/account');
		}else{
$id=$this->uri->segment(3);
$data['edit']=$this->db->get_where('account',['username'=>$id])->row_array();
			$data['content']='edit_akun';
		$this->load->view('dashboard',$data);
		}
	}

	function hapus_akun(){
$id=$this->uri->segment(3);
	$this->db->where('username',$id);
	$this->db->delete('account');	
	redirect('Welcome/account');
	}
}
