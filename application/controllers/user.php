<?php
class user extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_dataaset');
    }

    public function index(){
        // if($this->session->userdata('logged_in') == TRUE){
        $data['isi']='v_dataaset';
        $data['data'] = $this->m_dataaset->get_dataaset();
        $this->load->view('indexuser',$data);
    // }
	// else{
	// 	$this->load->view('login');
	// }
    }

    public function detail_dataaset($id=''){
        $data_detail=$this->m_dataaset->detail_dataaset($id);
        echo json_encode($data_detail);
        $data['isi']='v_dataasetedit'; 
        $this->load->view('index',$data);
    }  

    public function hapus_dataaset($id){
        // if($this->session->userdata('logged_in') == TRUE){
            $prosesdelete = $this->m_dataaset->hapus_dataaset($id);
            if ($prosesdelete == TRUE) {
                $this->session->flashdata('pesan', 'Sukses Hapus Data');
            }else{
                $this->session->flashdata('pesan', 'Gagal Hapus Data');
            }
            redirect(base_url('index.php/dataaset'),'refresh');
    // }
    //     else{
    //         $this->load->view('login');
    //     }
    }

}