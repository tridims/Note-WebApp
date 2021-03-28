<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends CI_Controller {

	//
	public function index()
	{
			$this->load->view('user/index');
	}

	// get Catatan
	public function Catatan()
	{
		if($this->session->userdata('login')==TRUE){
			$this->load->model('M_note');
			$data['query']=$this->M_note->get_catatan();
			$data['content_view'] = "Catatan";
			$this->load->view('index', $data);
		}else{
			redirect('Note/login');
		}
	}

	//add Catatan
    public function addCatatan(){
		if($this->session->userdata('login')==TRUE){
		$this->form_validation->set_rules('deadline', 'deadline', 'trim|required', array('required' => 'judul harus diisi'));
		$this->form_validation->set_rules('isi', 'isi', 'trim|required', array('required' => 'isi harus diisi'));
			if ($this->form_validation->run() == TRUE)
			{
				$data =array(
				'deadline' 	=> $this->input->post('deadline'),
				'tgl'		=> date('y-m-d h:i:s'),
				'isi' 		=> $this->input->post('isi')
				);
				$this->load->model('M_note');
				$add = $this->M_note->insert_catatan($data);
			if ($add == TRUE)
			{
				$this->session->set_flashdata('pesan', 'sukses tambah');
			} else {
				$this->session->set_flashdata('pesan', 'gagal tambah');
			}
			redirect('Note/Catatan');
			}else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('Note/Catatan');
			}
		}else{
		redirect('Note/login');
		}
	}

	//update Catatan
	public function updateCatatan(){
		if($this->session->userdata('login')==TRUE){
		$this->form_validation->set_rules('deadline', 'deadline', 'trim|required', array('required' => 'judul harus diisi'));
		$this->form_validation->set_rules('isi', 'isi', 'trim|required', array('required' => 'isi harus diisi'));
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('Note/Catatan', 'refresh');
		} else{
				$data =array(
					'deadline' => $this->input->post('deadline'),
					'tgl' => date('y-m-d h:i:s'),
					'isi' => $this->input->post('isi')
					);
					$where = array(
					'id_catatan' => $this->input->post('id_catatan')
					);
					$this->load->model('M_note');
					$update = $this->M_note->update_catatan($data, $where);
				if ($update == TRUE) {
					$this->session->set_flashdata('pesan', 'sukses update');
				}
				else {
					$this->session->set_flashdata('pesan', 'gagal update');
				}
				redirect('Note/Catatan', 'refresh');
			}		
		} else{
		redirect('Note/login','refresh');
		}
	}

	//menampilkan detail catatan untuk update
	public function detailCatatan()
	{
		$id = $this->uri->segment(3);
		$this->load->model('M_note');
		$data = $this->M_note->detail_catatan($id);
		echo json_encode($data);
	}
    
	//delete catatan
	function deleteCatatan($id_catatan){
		$where = array('id_catatan' => $id_catatan);
		$this->load->model('M_note');
		$delete = $this->M_note->delete_catatan($where);
		if ($delete == TRUE) {
			$this->session->set_flashdata('pesan', 'sukses hapus');
		}
		else {
			$this->session->set_flashdata('pesan', 'gagal hapus');
		}
		redirect('Note/Catatan', 'refresh');
	}

	//add Pengajuan
    public function addPengajuan(){
		$this->form_validation->set_rules('nama', 'nama', 'trim|required', array('required' => 'nama harus diisi'));
		$this->form_validation->set_rules('email', 'email', 'trim|required', array('required' => 'email harus diisi'));
		$this->form_validation->set_rules('saran', 'saran', 'trim|required', array('required' => 'saran harus diisi'));
			if ($this->form_validation->run() == TRUE)
			{
				$data =array(
				'nama' 	=> $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'saran' => $this->input->post('saran')
				);
				$this->load->model('M_note');
				$add = $this->M_note->insert_pengajuan($data);
			if ($add == TRUE)
			{
				$this->session->set_flashdata('pesan', 'terimakasih telah mengajukan saran');
			} else {
				$this->session->set_flashdata('pesan', 'mohon maaf pengajuan anda gagal');
			}
			redirect('Note/index');
			}else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('Note/index');
			}
	}

	//view halaman profile
	public function profile()
	{
		if($this->session->userdata('login')==TRUE){
			
			$id = $this->uri->segment(3);
			$this->load->model('M_note');
			$data['profile'] = $this->M_note->detail_profile($this->session->userdata('id_user'));
			$data['content_view'] = "profile";
			$this->load->view('index', $data);

		}else{
			redirect('Note/login');
		}
	}
	public function editProfile(){
		
		$id = $this->uri->segment(3);
		$this->load->model('M_note');
		$data['profile'] = $this->M_note->detail_profile($id);
		$data['content_view'] = "edit_profile";
		$this->load->view('index', $data);
	}
	//update Profile
	public function updateProfile($id){
		
		if($this->session->userdata('login')==TRUE){
			$this->load->model('M_note');
			$profile = $this->M_note->detail_profile($id);
			if($profile == null){

				// echo "bocil";
				$data =array(
					'id_user' => $id,
					'username' => $this->input->post('username'),
					'nama' => $this->input->post('nama'),
					'tanggal_lahir' => $this->input->post('tanggal_lahir'),
					'gender' => $this->input->post('gender'),
					'email' => $this->input->post('email'),
					'noHp' => $this->input->post('noHp'),
					'alamat' => $this->input->post('alamat')
					);
					$this->load->model('M_note');
					$update = $this->M_note->insert_profile($data);
				if ($update == TRUE) {
					$this->session->set_flashdata('pesan', 'sukses update');
				}
				else {
					$this->session->set_flashdata('pesan', 'gagal update');
				}
				redirect('Note/profile', 'refresh');
			}else{
				$data =array(
					'username' => $this->input->post('username'),
					'nama' => $this->input->post('nama'),
					'tanggal_lahir' => $this->input->post('tanggal_lahir'),
					'gender' => $this->input->post('gender'),
					'email' => $this->input->post('email'),
					'noHp' => $this->input->post('noHp'),
					'alamat' => $this->input->post('alamat')
					);
					$where = array(
					'id_profile' => $this->input->post('id_profile')
					);
					$this->load->model('M_note');
					$update = $this->M_note->update_profile($data, $where);
				if ($update == TRUE) {
					$this->session->set_flashdata('pesan', 'sukses update');
				}
				else {
					$this->session->set_flashdata('pesan', 'gagal update');
				}
				redirect('Note/profile', 'refresh');
			}	
		} else{
		redirect('Note/login','refresh');
		}
	}
	//menampilkan detail profile
	public function detailProfile()
	{
		$id = $this->uri->segment(3);
		$this->load->model('M_note');
		$data = $this->M_note->detail_profile($id);
		echo json_encode($data);
	}

	//view halaman register
	public function register()
	{
		$this->load->view('register');
	}

	//add register
	public function addRegister()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
			if ($this->form_validation->run() == TRUE)
			{
				$nama = $this->input->post("nama", true);
				$username = $this->input->post("username", true);
        		$password = $this->input->post("password", true);

				$data =array(
				'nama'		=> $nama,
				'username'	=> $username,
				'password' 	=> password_hash($password, PASSWORD_DEFAULT)
				);
				$this->load->model('M_note');
				$add = $this->M_note->register($data);
			if ($add == TRUE)
			{
				$this->session->set_flashdata('pesan', 'sukses tambah');
			} else {
				$this->session->set_flashdata('pesan', 'gagal tambah');
			}
			redirect('Note/login');
			}else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('Note/register');
			}
	}

	//view halaman Login
	public function login()
	{
		$this->load->view('login');
	}

	//login
	public function signIn()
	{
		$where = array(
			'username' => $this->input->post('username')
		);
		$userpass = $this->input->post('password');
		$query = $this->db->where($where)->get('user');
        if($this->db->affected_rows()>0){
			$data_login = $query->row();
			if (password_verify($userpass, $data_login->password)) {
            $data_session = array(
				'id_user' => $data_login->id_user,
                'username' => $data_login->username,
				'login' => TRUE
            );
            $this->session->set_userdata($data_session);
			redirect('Note/Catatan');
			}else{
			$this->session->set_flashdata('pesan','Password salah');
			redirect('Note/login');
			}
        }else{
			$this->session->set_flashdata('pesan','Username tidak ditemukan');
			redirect('Note/login');
        }
	}

	//logout
	public function signOut()
	{
		$this->session->sess_destroy();
        redirect('Note/login');

	}

}