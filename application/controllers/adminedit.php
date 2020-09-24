<?php
class adminedit extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index($id=''){
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
    public function edit_admin(){
        if($this->session->userdata('logged_in') == TRUE){
            $this->form_validation->set_rules('id', 'id','trim|required');
            $this->form_validation->set_rules('nama', 'nama','trim|required');
            $this->form_validation->set_rules('username', 'username','trim|required');
            $this->form_validation->set_rules('password', 'password','trim|required');
            $this->form_validation->set_rules('email', 'email','trim|required');
            $this->form_validation->set_rules('no_hp', 'no_hp','trim|required');
            $this->form_validation->set_rules('alamat', 'alamat','trim|required');
            $this->form_validation->set_rules('desc', 'desc','trim|required');
            $this->form_validation->set_rules('role', 'role','trim|required');

            if ($this->form_validation->run()==FALSE) {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/admin/detail_admin'),'refresh');
            }else{
                $prosesupdate=$this->m_admin->edit_admin();
                if($prosesupdate){
                    $this->session->set_flashdata('pesan', 'sukses update');
                }else{
                    $this->session->set_flashdata('pesan', 'gagal update');
                }
                redirect(base_url('index.php/admin/detail_admin'),'refresh');
            }
        }
        else{
            $this->load->view('login');
        }
    }
    

}

    