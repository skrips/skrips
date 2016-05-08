<?php

Class Mtl extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        
    }

    function add_artikel() {
        $dt_artikel = array(
            'judul' => $this->input->post('judul'),
            'akses' => $this->input->post('akses'),
            'isi' => $this->input->post('isi'),
            'sumber' => $this->input->post('sumber')
        );
        if ($this->db->insert('artikel', $dt_artikel)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function priv() {
        $username = $this->input->post('username');
        $this->db->where('username', $username);
        $this->db->where('passw_user', md5($this->input->post('password')));
        $query = $this->db->get('user');
        if ($query->num_rows() == 1) {
            return $query->row();
        }
    }
    
    function get_akun(){
        $username = $this->session->userdata('username');
        $this->db->where('username',$username);
        return $this->db->get('user')->row();
    }

}

?>
