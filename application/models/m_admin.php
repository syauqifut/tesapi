<?php
class m_admin extends CI_model{
    
    public function get_admin(){
        return $this->db->get('admin')
                        ->result();
    }

    public function tambah_admin(){
        $tambah_admin=array(
			'nama'=>$this->input->post('nama'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email'),
			'no_hp'=>$this->input->post('no_hp'),
			'alamat'=>$this->input->post('alamat'),
            'desc'=>$this->input->post('desc'),
            'role'=>$this->input->post('role')
            
		);
		return $this->db->insert('admin', $tambah_admin);
    }
        

    public function detail_admin($id){
        return $this->db->where('id', $id)
                        ->get('admin')
                        ->row();
    }
    
    public function edit_admin(){
		$edit_admin=array(
            'id'=>$this->input->post('id'),
            'nama'=>$this->input->post('nama'),
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
            'email'=>$this->input->post('email'),
            'no_hp'=>$this->input->post('no_hp'),
            'alamat'=>$this->input->post('alamat'),
            'desc'=>$this->input->post('desc'),
            'role'=>$this->input->post('role'),
    );
    return $this->db->where('id', $this->input->post('id'))
                    ->update('admin',$edit_admin);
    }

    public function hapus_admin($id)
	{
        $delete = $this->db->where('id',$id)
                           ->delete('admin');
		if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
	}

}