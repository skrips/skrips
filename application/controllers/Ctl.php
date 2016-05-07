<?php

Class Ctl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index() {
        $data['error'] = "";
        $data['content'] = "defcont";
        $this->load->view('skeleton', $data);
    }

    function view($v, $error = "") {
        $data['error'] = "";
        $data['content'] = $v;
        $this->load->view('skeleton', $data);
    }

    function add_artikel() {
        $this->form_validation->set_rules('judul', 'Judul Artikel', 'trim|required');
        $this->form_validation->set_rules('topik', 'Topik Artikel', 'trim|required');
        $this->form_validation->set_rules('akses', 'Akses Publikasi Artikel', 'trim|required');
        $this->form_validation->set_rules('isi', 'Konten Artikel', 'trim|required');
        $this->form_validation->set_rules('sumber', 'Sumber Artikel', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->view('defcont', "<div class='note note-danger'>
            <h4 class='block'>Success! Some Header Goes Here</h4>
	    <p>
            Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
	    </p>
            </div>"
            );
        } else {
            if ($this->Mtl->add_artikel()) {
                $this->view('defcont', "<div class='note note-danger'>
            <h4 class='block'>Success! Some Header Goes Here</h4>
	    <p>
            Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
	    </p>
            </div>"
                );
            } else {
                $this->view('defcont', "<div class='note note-danger'>
            <h4 class='block'>Success! Some Header Goes Here</h4>
	    <p>
            Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
	    </p>
            </div>"
                );
            }
        }
    }

}

?>
