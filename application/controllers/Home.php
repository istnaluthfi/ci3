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

	if ($this->input->post('simpan')){
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


	public function edit($id_blog){
		$this->load->model('artikel');
		$data['tipe'] = "Edit";
		$data['default'] = $this->artikel->get_default($id_blog);

		if(isset($_POST['simpan'])){
			$this->artikel->update($_POST, $id_blog);
			redirect('home_view');
		}

		$this->load->view("home_view_form",$data);
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
	