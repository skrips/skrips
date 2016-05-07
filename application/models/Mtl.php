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
        if ($this->db->insert('artikel', $dt_artikel)){
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
