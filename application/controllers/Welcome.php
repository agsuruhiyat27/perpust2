<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct(){
	parent::__construct();
}

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() != false){
			$where = array('username'=>$username, 'password'=>md5($password));

			$data = $this->M_perpus->edit_data($where,'login');
			$d = $this->M_perpus->edit_data($where,'login')->row();
			$cek = $data->num_rows();
			if($cek > 0)
			{
				$session = array('id' => $d->id_admin,'nama' => $d->nama_admin,'status' =>'login', 'isAdmin' => $d->isadmin, 'id_admin'=> $d->id_admin);
				$this->session->set_userdata($session);
				redirect(base_url().'admin');
			}else{
				$this->session->set_flashdata('alert','Username atau password Anda salah');
				$this->index();
			}
		}else{
				$this->session->set_flashdata('alert','Anda Belum mengisi username atau password');
				$this->index();
		}
	}

	function register(){
		$this->load->model('M_perpus');
		$data = array(
					'nama_anggota' => $this->input->post('nama_anggota'),
					'gender' => $this->input->post('gender'),
					'no_telp' => $this->input->post('no_telp'),
					'alamat' => $this->input->post('alamat'),
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password')),
				);
		$this->M_perpus->insert_data($data,'anggota');
		$this->session->set_flashdata('alert','Akun anda menunggu persetujuan Admin');
		$this->index();

	}
}
