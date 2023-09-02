<?php


class Templates
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function admin($content, $data = Null)
    {
        $this->ci->load->view('templates_admin/v_admin_header');
        $this->ci->load->view('templates_admin/v_admin_sidebar', $data);
        $this->ci->load->view('admin/' . $content, $data);
        $this->ci->load->view('templates_admin/v_admin_footer');
        $this->ci->load->view('templates_admin/v_admin_script', $data);
    }

    public function pengunjung($content, $data = Null)
    {
        $this->ci->load->view('templates_pengunjung/v_header');
        $this->ci->load->view('templates_pengunjung/v_navbar', $data);
        $this->ci->load->view('pengunjung/' . $content, $data);
        $this->ci->load->view('templates_pengunjung/v_footer');
        $this->ci->load->view('templates_pengunjung/v_script', $data);
    }


    public function login($data = Null)
    {
        $this->ci->load->view('auth/v_login', $data);
    }

    public function login_siswa($data = Null)
    {
        $this->ci->load->view('auth/v_login_siswa', $data);
    }

    public function registerasi_penjual($data = Null)
    {
        $this->ci->load->view('penjual/v_registerasi_penjual', $data);
    }
}
