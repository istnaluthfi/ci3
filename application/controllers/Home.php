<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->model('category_model');
		$this->load->model('artikel');

	}

	public function index()
	{
		$this->load->model('artikel');

		// Dapatkan data dari model Blog dengan pagination
 		// Jumlah artikel per halaman
 		$limit_per_page = 2;
 		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		 $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

 		// Dapatkan jumlah data
		 $total_records = $this->artikel->get_total();
		 if ($total_records > 0) {
 			// Dapatkan data pada halaman yg dituju
 			$data["artikel"] = $this->artikel->get_all_artikel($limit_per_page,
			$start_index);

		 // Konfigurasi pagination
 		$config['base_url'] = base_url() . 'home/index';
 		$config['total_rows'] = $total_records;
 		$config['per_page'] = $limit_per_page;
 		$config["uri_segment"] = 3;

		 $this->pagination->initialize($config);

		 // Buat link pagination
 		$data["links"] = $this->pagination->create_links();
		}


		// $this->load->view('header');
		$this->load->view('home_view',$data);
		// $this->load->view('footer');

	}

	public function detail($id)
	{
		$this->load->model('artikel');
		$data['detail'] = $this->artikel->get_single($id);
		// $this->load->view('header');
		$this->load->view('home_detail', $data);
		// $this->load->view('footer');
	}



public function tambah()
{
	//cek login
	if(!$this->session->userdata('logged_in')){
		redirect('user/login');
	}

	$this->load->model('artikel');
	$this->load->model('category_model');
	$data = array();
	$data['Category'] = $this->category_model->get_categories();

	$this->load->library('form_validation');
	$this->form_validation->set_rules('input_judul','isi judul!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_content','isi konten!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_tanggal','isi tanggal!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_penulis','isi penulis!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_sumber','isi sumber!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_lokasi_penulis','isi lokasi_penulis!!!','required', array('required' => 'isi %s,'));


	if($this->form_validation->run()==FALSE){
			$this->load->view('tambah', $data);
		}
		else{
			if ($this->input->post('simpan')) {
			$upload = $this->artikel->upload();

			if ($upload['result'] == 'success') {
				$this->artikel->insert($upload);
				redirect('home');
			}else{
				$data['message'] = $upload['error'];
			}
		}
		
		// $this->load->view('header');
		$this->load->view('home_view', $data);
		// $this->load->view('footer');
	}
}



	// if ($this->input->post('simpan')){
	// 	$upload = $this->artikel->upload();

	// 	if ($upload['result'] == 'success') {
	// 		$this->artikel->insert($upload);
	// 		redirect('home');
	// 	}else{
	// 		$data['message'] = $upload['error'];
	// 	}
	// }

	// $this->load->view('home_view', $data);
	// }


	public function edit($id_blog){
		$this->load->model('artikel');
		$data['tipe'] = "Edit";
		$data['default'] = $this->artikel->get_single($id_blog);

		if(isset($_POST['simpan'])){
			$this->artikel->update($_POST, $id_blog);
			redirect('home_view');
		}

		$this->load->view("home_view_form",$data);
	}


public function create()
    {
        // Judul Halaman
        $data['page_title'] = 'Buat Kategori';

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name',
            'Nama Kategori',
            'required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'Judul ' . $this->input->post('title') . ' sudah ada bosque.'
            )
        );
if($this->form_validation->run() === FALSE){
            // $this->load->view('templates/header');
            $this->load->view('home_view', $data);
            // $this->load->view('templates/footer');
        } else {
            $this->category_model->create_category();
            redirect('Category');
        }
    }



	public function delete($id_blog){
		$this->load->model('artikel');
		$this->artikel->delete($id_blog);
		redirect('home');
	}

}




/**
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	