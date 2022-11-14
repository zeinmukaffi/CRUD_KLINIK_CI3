<?php 
 
class Auth extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Auth_m');
 
	}
 
	public function index(){
		$this->load->view('login');
	}
 
	public function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password) // admin123
            );
        $cek = $this->Auth_m->cek_login("user",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url());
 
        }else{
            echo "Username dan password salah !";
        }
    }
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}