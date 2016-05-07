<?php

Class Ctl extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('skeleton');
    }
}
?>
