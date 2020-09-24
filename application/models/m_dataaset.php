<?php
class m_dataaset extends CI_model{
    
    public function get_dataaset(){
        return $this->db->get('dataaset')
                        ->result();
    }

    public function tambah_dataaset(){
        $tambah_dataaset=array(
			'kode_aset'=>$this->input->post('kode_aset'),
			'nama_aset'=>$this->input->post('nama_aset'),
			'jumlah'=>$this->input->post('jumlah'),
			'merk'=>$this->input->post('merk'),
			'desc'=>$this->input->post('desc'),
		);
		return $this->db->insert('dataaset', $tambah_dataaset);
    }


    public function detail_dataaset($id){
        return $this->db->where('id', $id)
                        ->get('dataaset')
                        ->row();
    }
    
    public function edit_dataaset(){
		$edit_dataaset=array(
            'id'=>$this->input->post('id'),
            'kode_aset'=>$this->input->post('kode_aset'),
            'nama_aset'=>$this->input->post('nama_aset'),
            'jumlah'=>$this->input->post('jumlah'),
            'merk'=>$this->input->post('merk'),
            'desc'=>$this->input->post('desc')
    );
    return $this->db->where('id', $this->input->post('id'))
                    ->update('dataaset',$edit_dataaset);
    }

    public function hapus_dataaset($id)
	{
        $delete = $this->db->where('id',$id)
                           ->delete('dataaset');
		if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
	}

}