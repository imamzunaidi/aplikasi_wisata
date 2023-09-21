<?php class M_auth extends CI_Model
{
    // registrasi awal user
    public function register($data)
    {
        $this->db->insert('tbl_users', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    // login data user atau admin
    public function login_admin($username, $password)
    {
        $result = $this->db->query("SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'");
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

    public function login_member($username, $password)
    {
        $result = $this->db->query("SELECT * FROM tbl_member WHERE username_member = '$username' AND password_member = '$password'");
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

    public function get_member($id)
    {
        return $this->db->get_where('tbl_member', ['id_member' => $id])->row();
    }
}
