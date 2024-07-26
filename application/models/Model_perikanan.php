<?php


/**
* 
*/
class Model_perikanan extends CI_Model {

	public function getPerikanan() {
		return $this->db->get('perikanan')->result();
	}
   
    public function getOnePerikanan() {
		return $this->db->get_where('perikanan',['ikan_id' => $this->uri->segment(3)])->row();
	}

	public function insertPerikanan() {
		$data = [
			'ikan_id' => $this->uuid->generate_uuid(),
			'nama' => $this->input->post('nama_ikan'),
			'jenis' => $this->input->post('jenis'),
			'jumlah' => $this->input->post('jumlah'),
			'tahun' => $this->input->post('tahun')
		];
		$this->db->insert('perikanan',$data);
		return true;
	}

	public function editPerikanan() {
		$ikan_id = $this->input->post('ikan_id');
		$data = [
			'nama' => $this->input->post('nama_ikan'),
			'jenis' => $this->input->post('jenis'),
			'jumlah' => $this->input->post('jumlah'),
            'tahun' => $this->input->post('tahun'),
		];
		$this->db->where('ikan_id',$ikan_id);
		$this->db->update('perikanan',$data);
		return true;
	}

	public function deletePerikanan () {
		$this->db->where('ikan_id',$this->uri->segment(3));
		$this->db->delete('perikanan');
		return true;
	}
}