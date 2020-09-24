<?php
class dataasettambah extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_dataaset');
    }

    public function index(){
        if($this->session->userdata('logged_in') == TRUE){
            $data['isi']='v_dataasettambah'; 
            $this->load->view('index',$data);
        }
        else{
            $this->load->view('login');
        }
    }

    public function tambah_dataaset(){
        if($this->session->userdata('logged_in') == TRUE){
            $this->form_validation->set_rules('kode_aset', 'kode_aset','trim|required', array('required' => 'kode aset harus diisi'));
            $this->form_validation->set_rules('nama_aset', 'nama_aset','trim|required', array('required' => 'nama aset harus diisi'));
            $this->form_validation->set_rules('jumlah', 'jumlah','trim|required', array('required' => 'jumlah harus diisi'));
            $this->form_validation->set_rules('merk', 'merk','trim|required', array('required' => 'merk harus diisi'));
            $this->form_validation->set_rules('desc', 'desc','trim|required', array('required' => 'deskripsi harus diisi'));
            
            if ($this->form_validation->run() == TRUE ) 
            {
                $prosestambah=$this->m_dataaset->tambah_dataaset();
                if($prosestambah==true){
                    $this->session->set_flashdata('pesan','sukses masuk');
                } else{
                    $this->session->set_flashdata('pesan', 'gagal masuk');
                }
                redirect(base_url('index.php/dataaset'));
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/dataasettambah'));
            }
        }
        else{
            $this->load->view('login');
        }
    }

}

    