<?php
class dataasetedit extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_dataaset');
    }

    public function index($id=''){
        if($this->session->userdata('logged_in') == TRUE){
            $data_detail=$this->m_dataaset->detail_dataaset($id);
            echo json_encode($data_detail);
            $data['isi']='v_dataasetedit'; 
            $this->load->view('index',$data);
        }
        else{
            $this->load->view('login');
        }
    }
    
    public function detail_dataaset($id=''){
        if($this->session->userdata('logged_in') == TRUE){
            $data_detail=$this->m_dataaset->detail_dataaset($id);
            echo json_encode($data_detail);
            $data['isi']='v_dataasetedit'; 
            $this->load->view('index',$data);
        }    
        else{
            $this->load->view('login');
        }
    }

    public function edit_dataaset(){
        if($this->session->userdata('logged_in') == TRUE){
            $this->form_validation->set_rules('id', 'id','trim|required');
            $this->form_validation->set_rules('kode_aset', 'kode_aset','trim|required');
            $this->form_validation->set_rules('nama_aset', 'nama_aset','trim|required');
            $this->form_validation->set_rules('jumlah', 'jumlah','trim|required');
            $this->form_validation->set_rules('merk', 'merk','trim|required');
            $this->form_validation->set_rules('desc', 'desc','trim|required');

            if ($this->form_validation->run()==FALSE) {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/dataaset/detail_dataaset'),'refresh');
            }else{
                $prosesupdate=$this->m_dataaset->edit_dataaset();
                if($prosesupdate){
                    $this->session->set_flashdata('pesan', 'sukses update');
                }else{
                    $this->session->set_flashdata('pesan', 'gagal update');
                }
                redirect(base_url('index.php/dataaset/detail_dataaset'),'refresh');
            }
        }
        else{
            $this->load->view('login');
        }
    }
}

    