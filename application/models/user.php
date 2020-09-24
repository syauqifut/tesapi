<?php
class user extends CI_model{
    
    public function cek_login(){
        $u = $this->input->post('username');
		$p = $this->input->post('password');

	$query = $this->db->where('username',$u)
					  ->where('password',$p)
					  ->get('admin');

	if($this->db->affected_rows() > 0){

		$data_login = $query->row();

		$data_session = array(
							'username' => $data_login->username,
							'password' => $data_login->password,
							'role' => $data_login->role,
							'logged_in'=> TRUE
						);

        $this->session->set_userdata($data_session);
        
        if($this->session->userdata("role") == "1"){
            redirect('admin');
        }else{
            redirect('user');
        }

		return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function get_user(){
		return $this->db->get('user')
						->result();
	}
}