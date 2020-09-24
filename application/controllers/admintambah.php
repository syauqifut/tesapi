<?php
class admintambah extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index(){
        if($this->session->userdata('logged_in') == TRUE){
            $data['isi']='v_admintambah'; 
            $this->load->view('index',$data);
            
        }
        else{
            $this->load->view('login');
        }
    }

        public function tambah_admin(){
            if($this->session->userdata('logged_in') == TRUE){
                $this->form_validation->set_rules('nama', 'nama','trim|required', array('required' => 'nama harus diisi'));
                $this->form_validation->set_rules('username', 'username','trim|required', array('required' => 'username harus diisi'));
                $this->form_validation->set_rules('password', 'password','trim|required', array('required' => 'password harus diisi'));
                $this->form_validation->set_rules('email', 'email','trim|required', array('required' => 'email harus diisi'));
                $this->form_validation->set_rules('no_hp', 'no_hp','trim|required', array('required' => 'no hp harus diisi'));
                $this->form_validation->set_rules('alamat', 'alamat','trim|required', array('required' => 'alamat harus diisi'));
                $this->form_validation->set_rules('desc', 'desc','trim|required', array('required' => 'deskripsi harus diisi'));
                $this->form_validation->set_rules('role', 'role','trim|required', array('required' => 'role harus diisi'));
                
                if ($this->form_validation->run() == TRUE ) 
                {
                    $prosestambah=$this->m_admin->tambah_admin();
                    if($prosestambah==true){
                        $this->session->set_flashdata('pesan','sukses masuk');
                    } else{
                        $this->session->set_flashdata('pesan', 'gagal masuk');
                    }
                    redirect(base_url('index.php/admin'));
                } else {
                    $this->session->set_flashdata('pesan', validation_errors());
                    redirect(base_url('index.php/admintambah'));
                }
            }
            else{
                $this->load->view('login');
            }
        }

}

    