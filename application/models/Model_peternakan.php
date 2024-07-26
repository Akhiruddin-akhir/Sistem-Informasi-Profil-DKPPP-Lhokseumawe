<?php

/**
* 
*/
class Model_peternakan extends CI_Model {

	public function getPeternakan() {
		return $this->db->get('peternakan')-> result();
	}

	public function getOnePeternakan() {
		return $this->db->get_where('peternakan',['hewan_id' => $this->uri->segment(3)])->row();
	}

	public function insertPeternakan() {
		$data = [
			'hewan_id' => $this->uuid->generate_uuid(),
			'nama' => $this->input->post('nama_hewan'),
			'jumlah' => $this->input->post('jumlah'),
			'tahun' => $this->input->post('tahun')
		];
		$this->db->insert('peternakan',$data);
		return true;
	}

	public function editPeternakan() {
		$hewan_id = $this->input->post('hewan_id');
		$data = [
			'nama' => $this->input->post('nama_hewan'),
			'jumlah' => $this->input->post('jumlah'),
            'tahun' => $this->input->post('tahun'),
		];
		$this->db->where('hewan_id',$hewan_id);
		$this->db->update('peternakan',$data);
		return true;
	}

	public function deletePeternakan() {
		$this->db->where('hewan_id',$this->uri->segment(3));
		$this->db->delete('peternakan');
		return true;
	}
}