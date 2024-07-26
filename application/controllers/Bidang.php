<?php

/**
* 
*/
class Bidang extends CI_Controller {
	
    public function perikanan() {
		$this->load->model('Model_perikanan','perikanan');
		$data['perikanan'] = $this->perikanan->getPerikanan();
		$this->template->load('template','bidang/perikanan',$data);
	}

	public function perkebunan() {
		$this->load->model('Model_perkebunan','perkebunan');
		$data['perkebunan'] = $this->perkebunan->getPerkebunan();
		$this->template->load('template','bidang/perkebunan',$data);
	}

	public function peternakan() {
		$this->load->model('Model_peternakan','peternakan');
		$data['peternakan'] = $this->peternakan->getPeternakan();
		$this->template->load('template','bidang/peternakan',$data);
	}

	public function pangan() {
		$this->load->model('Model_pangan','pangan');
		$data['pangan'] = $this->pangan->getPangan();
		$this->template->load('template','bidang/pangan',$data);
	}
}