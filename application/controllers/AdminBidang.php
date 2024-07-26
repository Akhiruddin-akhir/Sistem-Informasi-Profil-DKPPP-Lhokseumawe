<?php

/**
* 
*/
class AdminBidang extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;

		} 
		
		$this->load->model('Model_perikanan','perikanan');
		$this->load->model('Model_perkebunan','perkebunan');
		$this->load->model('Model_peternakan','peternakan');
		$this->load->model('','pangan');
	}

	public function index() {
		$this->perikanan();
	}
	
	// perikanan
	public function perikanan() {

		$data['perikanan'] = $this->perikanan->getPerikanan();
		$this->template->load('templateAdmin','admin/perikanan/perikanan',$data);
	}

	public function GetPerikanan() {
		$data = $this->perikanan->getPerikanan(15,$this->input->get('offset'));
		if($data) {
			echo json_encode($data);
		} else {
			echo json_encode(null);
		}
		return true;
	}

	public function insertPerikanan() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_ikan','Nama Ikan','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jenis','Jenis','required|max_length[50]',message_id());
            $this->form_validation->set_rules('jumlah','jumlah','required',message_id());
            $this->form_validation->set_rules('tahun','tahun','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['nama_ikan','jenis', 'jumlah', 'tahun']);
				redirect('adminBidang/insertPerikanan');
				return true;

			} else {

				$this->perikanan->insertPerikanan();
				redirect('adminBidang/perikanan');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/perikanan/insertPerikanan',$data);
		}
	}

	public function editPerikanan() {
		
		if(isset($_POST['submit'])) {

			
			$this->form_validation->set_rules('nama_ikan','Nama Ikan','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jenis','Jenis','required',message_id());
            $this->form_validation->set_rules('jumlah','jumlah','required',message_id());
            $this->form_validation->set_rules('tahun','tahun','required',message_id());
            
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['nama_ikan','perikanan'],false);
				redirect('adminBidang/editPerikanan'.$this->input->post('ikan_id'));
				return false;

			} else {

				$this->perikanan->editPerikanan();
				redirect('adminBidang/perikanan');
				return true;
			}
			
		} else {
			$data['errors'] = get_errors();
			$data['perikanan'] = $this->perikanan->getOnePerikanan();
			$this->template->load('templateAdmin','admin/perikanan/editPerikanan',$data);
		}
	}

		public function deletePerikanan() {
			$this->perikanan->deletePerikanan();
			redirect('adminBidang/Perikanan');
			return true;
		}
	

	// perkebunan
	
	public function perkebunan() {

		$data['perkebunan'] = $this->perkebunan->getPerkebunan();
		$this->template->load('templateAdmin','admin/perkebunan/perkebunan',$data);
	}

	public function getPerkebunan() {
		$data = $this->perkebunan->getPerkebunan(15,$this->input->get('offset'));
		if($data) {
			echo json_encode($data);
		} else {
			echo json_encode(null);
		}
		return true;
	}

	public function insertPerkebunan() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_kebun','Nama ','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jenis','Jenis','required|max_length[50]',message_id());
            $this->form_validation->set_rules('jumlah','jumlah','required',message_id());
            $this->form_validation->set_rules('tahun','tahun','required',message_id());
			
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['nama_kebun','jenis','jumlah', 'tahun']);
				redirect('adminBidang/insertPerkebunan');
				return false;

			} else {

				$this->perkebunan->insertPerkebunan();
				redirect('adminBidang/perkebunan');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/perkebunan/insertPerkebunan',$data);
		}
	}

	public function editPerkebunan() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_kebun','Nama','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jenis','Jenis','required|max_length[50]',message_id());
            $this->form_validation->set_rules('jumlah','jumlah','required',message_id());
            $this->form_validation->set_rules('tahun','tahun','required',message_id());

			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['nama_kebun','perkebunan'],false);
				redirect('adminBidang/editPerkebunan'.$this->input->post('kebun_id'));
				return false;

			} else {

				$this->perkebunan->editPerkebunan();
				redirect('adminBidang/perkebunan');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['perkebunan'] = $this->perkebunan->getOnePerkebunan();
			$this->template->load('templateAdmin','admin/perkebunan/editPerkebunan',$data);
		}
	}
	public function deletePerkebunan() {
		$this->perkebunan->deletePerkebunan();
		redirect('adminBidang/Perkebunan');
		return true;
	}

	// peternakan
	public function peternakan() {
	
		$data ['peternakan'] = $this->peternakan->getPeternakan();
		$this->template->load('templateAdmin','admin/peternakan/peternakan',$data);
	}
	
	public function getPeternakan() {
		$data = $this->peternakan->getPeternakan(15,$this->input->get('offset'));
		if($data) {
			echo json_encode($data);
		} else {
			echo json_encode(null);
		}
		return true;
	}

	public function insertPeternakan() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_hewan','Nama Hewan','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jumlah','jumlah','required',message_id());
            $this->form_validation->set_rules('tahun','tahun','required',message_id());

			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');
			
            if(!$this->form_validation->run()) {

				generate_errors(['nama_hewan','jumlah','tahun']);
				redirect('adminBidang/insertPeternakan');
				return true;

			} else {

				$this->peternakan->insertPeternakan();
				redirect('adminBidang/peternakan');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/peternakan/insertPeternakan',$data);
		}
	}

	public function editPeternakan() {

		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_hewan','Nama Hewan','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jumlah','jumlah','required',message_id());
            $this->form_validation->set_rules('tahun','tahun','required',message_id());
			
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['nama_hewan', 'peternakan'], false);
				redirect('adminBidang/insertPeternakan'. $this->input->post('hewan_id'));
				return false;


			} else {

				$this->peternakan->editPeternakan();
				redirect('adminBidang/peternakan');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['peternakan'] = $this->peternakan->getPeternakan();
			$this->template->load('templateAdmin','admin/peternakan/editPeternakan',$data);
		}
	}
	public function deletePeternakan() {
		$this->peternakan->deletePeternakan();
		redirect('adminBidang/Peternakan');
		return true;
	}
	// Pangan
	public function pangan() {

		$pangan = $this->pangan->getPangan();
		$data['jmlPangan'] = $pangan->num_rows();
		$data['pangan'] = $pangan->row();
		$this->template->load('templateAdmin','admin/pangan/pangan',$data);
	}

	public function insertPangan() {
		
		if(isset($_POST['submit'])) {

			
			$this->form_validation->set_rules('nama_pangan','Nama','required|max_length[50]',message_id());
			$this->form_validation->set_rules('url_fotoProfile','Url foro profile','max_length[100]',message_id());
			$this->form_validation->set_rules('keterangan','Keterangan','required',message_id());

			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['nama_pangan', 'url_fotoProfile','keterangan'], false);
				redirect('adminBidang/insertPangan');
				return false;

			} else {

				$this->pangan->insertPangan();
				redirect('adminBidang/pangan');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$this->template->load('templateAdmin','admin/pangan/insertPangan',$data);
		}
	}

	public function editPangan() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_pangan','Nama','required|max_length[50]',message_id());
			$this->form_validation->set_rules('url_fotoProfile','Url foro profile','max_length[100]',message_id());
			$this->form_validation->set_rules('keterangan','Keterangan','required',message_id());

			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['nama_pangan', 'url_fotoProfile','keterangan'], false);
				redirect('adminBidang/insertPangan');
				return false;

			} else {

				$this->pangan->editPangan();
				redirect('adminBidang/pangan');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['pangan'] = $this->pangan->getPangan()->row();
			$this->template->load('templateAdmin','admin/pangan/editPangan',$data);
		}
	}

}