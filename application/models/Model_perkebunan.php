<?php

/**
* 
*/
class Model_perkebunan extends CI_Model {

	public function getPerkebunan() {
		return $this->db->get('perkebunan')-> result();
	}
   
    public function getOnePerkebunan() {
		return $this->db->get_where('perkebunan',['kebun_id' => $this->uri->segment(3)])->row();
	}

	public function insertPerkebunan() {
		$data = [
			'kebun_id' => $this->uuid->generate_uuid(),
			'nama' => $this->input->post('nama_kebun'),
			'jenis' => $this->input->post('jenis'),
			'jumlah' => $this->input->post('jumlah'),
			'tahun' => $this->input->post('tahun')
		];
		$this->db->insert('perkebunan',$data);
		return true;
	}

	public function editPerkebunan() {
		$kebun_id = $this->input->post('kebun_id');
		$data = [
			'nama' => $this->input->post('nama_kebun'),
			'jenis' => $this->input->post('jenis'),
			'jumlah' => $this->input->post('jumlah'),
            'tahun' => $this->input->post('tahun'),
		];
		$this->db->where('kebun_id',$kebun_id);
		$this->db->update('perkebunan',$data);
		return true;
	}

	public function deletePerkebunan () {
		$this->db->where('kebun_id',$this->uri->segment(4));
		$this->db->delete('perkebunan');
		return true;
	}
}