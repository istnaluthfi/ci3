<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('artikel');
		$data['artikel'] = $this->artikel->get_artikels();
		$this->load->view('home_view', $data);
	}

	public function detail($id)
	{
		$this->load->model('artikel');
		$data['detail'] = $this->artikel->get_single($id);
		$this->load->view('home_detail', $data);
	}



public function tambah()
{
	$this->load->model('artikel');
	$data = array();

	$this->load->library('form_validation');
	$this->form_validation->set_rules('input_judul','isi judul!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_content','isi konten!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_tanggal','isi tanggal!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_penulis','isi penulis!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_sumber','isi sumber!!!','required', array('required' => 'isi %s,'));
	$this->form_validation->set_rules('input_lokasi_penulis','isi lokasi_penulis!!!','required', array('required' => 'isi %s,'));


	if($this->form_validation->run()==FALSE){
			$this->load->view('tambah');
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
		

		$this->load->view('home_view', $data);
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
                'is_unique' => 'Judul ' . $this->input->post('title') . ' sudah ada 
bosque.'
            )
        );
if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('categories/cat_create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->category_model->create_category();
            redirect('home');
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
	