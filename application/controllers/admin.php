<?php
class admin extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index(){
        if($this->session->userdata('logged_in') == TRUE){
            $data['isi']='v_admin';
            $data['data'] = $this->m_admin->get_admin();
            $this->load->view('index',$data);
        }
        else{
            $this->load->view('login');
        }
    }

    public function detail_admin($id=''){
        if($this->session->userdata('logged_in') == TRUE){
            $data_detail=$this->m_admin->detail_admin($id);
            echo json_encode($data_detail);
            $data['isi']='v_adminedit'; 
            $this->load->view('index',$data);
        }
        else{
            $this->load->view('login');
        }
    }    

    public function hapus_admin($id){
        if($this->session->userdata('logged_in') == TRUE){
            $prosesdelete = $this->m_admin->hapus_admin($id);
            if ($prosesdelete == TRUE) {
                $this->session->flashdata('pesan', 'Sukses Hapus Data');
            }else{
                $this->session->flashdata('pesan', 'Gagal Hapus Data');
            }
            redirect(base_url('index.php/admin'),'refresh');
        }
            else{
                $this->load->view('login');
            }
    }

}