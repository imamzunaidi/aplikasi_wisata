<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $this->templates->login();
    }

    public function login_siswa()
    {
        $this->templates->login_siswa();
    }

    public function login_member(){

        $username = $this->input->post('username', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $data_login = $this->M_auth->login_member($username, $password);

      
        if($data_login == NULL){
            $this->flash_message->failed('Username dan password salah', '');
        }else{
            $this->session->set_userdata('id_member', $data_login->id_member);
            $this->session->set_userdata('nama_member', $data_login->nama_member);
            $this->session->set_userdata('username_member', $data_login->username_member);
            $this->session->set_userdata('no_hp_member', $data_login->no_hp_member);
            $this->session->set_userdata('email_member', $data_login->email_member);
            $this->session->set_userdata('alamat_member', $data_login->alamat_member);
            redirect('');
        }
        
    }
    
    public function register_siswa()
    {
        $this->load->view('auth/v_register_siswa');
    }

    public function regiter_member(){

        $data = array(
            'nama_member' => $this->input->post('nama_member', TRUE),
            'username_member' => $this->input->post('username_member', TRUE),
            'password_member' => md5($this->input->post('password_member', TRUE)),
            'no_hp_member' => $this->input->post('no_hp_member', TRUE),
            'email_member' => $this->input->post('email_member', TRUE),
            'alamat_member' => $this->input->post('alamat_member', TRUE),
        );

        $this->M_member->insert($data);
      
        $this->flash_message->success('Register Berhasil', 'home');
    }


    public function pendaftaran(){
        $this->load->view('auth/v_pendaftaran');
    }

    public function login_admin()
    {
        $this->_rules_login();
        if ($this->form_validation->run() == FALSE) {
            $this->templates->login();
        } else {
            $username = $this->input->post('username', TRUE);
            $password = MD5($this->input->post('password', TRUE));
            $login_admin = $this->M_auth->login_admin($username, $password);
            if ($login_admin) {
                $this->session->set_userdata('id_users', $login_admin->kd_admin);
                $this->session->set_userdata('nama', $login_admin->nama_admin);
                $this->session->set_userdata('hak_akses', $login_admin->hak_akses); 
                redirect('dashboard');
            }else {
                $this->flash_message->failed('Username dan Password Salah !', 'login');
            }
        }
    }

    private function _rules_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }


    public function profile()
    {

        $id_member = $this->session->userdata('id_member');

        $data = array(
            'title' => 'Data Profile',
            'profile' => $this->M_auth->get_member($id_member),
        );

    
        $this->templates->pengunjung('v_profile', $data);
    }

    public function update_profile(){

        $id_member = $this->input->post('id_member', TRUE);
     
        $data = array(
            'nama_member' => $this->input->post('nama_member', TRUE),
            'username_member' => $this->input->post('username_member', TRUE),
            'no_hp_member' => $this->input->post('no_hp_member', TRUE),
            'email_member' => $this->input->post('email_member', TRUE),
            'alamat_member' => $this->input->post('alamat_member', TRUE),
            'username_member' => $this->input->post('username_member', TRUE),
            'password_member' => md5($this->input->post('password_member', TRUE)),
        );

        $this->M_member->update($data, $id_member);
        $this->flash_message->success('Update', 'profile');
    }
}


?>