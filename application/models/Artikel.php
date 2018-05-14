<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_all_artikel( $limit = FALSE, $offset = FALSE )
 	{
 	// Jika variable $limit ada pada parameter maka kita limit query-nya
 		if ( $limit ) {
 			$this->db->limit($limit, $offset);
 		}
 		$query = $this->db->get('blog');
		return $query->result();
 			// Urutkan berdasar tanggal
 		// $this->db->order_by('blog.tanggal_blog', 'DESC');
 		// Inner Join dengan table Categories
 		// $this->db->select('*');
 		// $this->db->from('blog');
 		// $this->db->join('categories', 'categories.id_cat = blog.id_blog');
 		// return $this->db->get()->result();
 	}


		public function get_total()
 	{
 		// Dapatkan jumlah total artikel
 		return $this->db->count_all("blog");
 	}




	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id_blog='.$id);
		return $query->result();

		$this->db->select("*");
		$this->db->from('blog');
		$this->db->join('categories','blog.id_blog = categories.id_cat');
		$this->db->Where('blog.id_blog='.$id_blog);
		return $this->db->get()->result();

	}

	public function upload(){
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('input_gambar')){
			$return = array ('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	} 
	public function insert($upload)
	{
		$data = array(
			'id_blog' => '',
			'judul_blog' => $this->input->post('input_judul'),
			'tanggal_blog' => $this->input->post('input_tanggal'),
			'content' => $this->input->post('input_content'),
			'image' => $upload['file']['file_name'],
			'penulis' => $this->input->post('input_penulis'),
			'sumber' => $this->input->post('input_sumber'),
			'lokasi_penulis' => $this->input->post('input_lokasi_penulis'),
		);

		$this->db->insert('blog', $data);
	}

	public function update($post, $id){
		$judul_blog = $this->db->escape($post['judul_blog']);
		$content = $this->db->escape($post['content']);
		$tanggal_blog =$this->db->escape($post['tanggal_blog']);

		$sql = $this->db->query('UPDATE blog SET judul_blog = $judul_blog, content = $content, tanggal_blog = $tanggal_blog WHERE id_blog = '.intval($id_blog));

		return TRUE;

	}


	public function delete($id_blog){
		$query = $this->db->query('DELETE from blog WHERE id_blog= '.$id_blog);
	}

	public function create_category()
   {
       $data = array(
           'cat_name'          => $this->input->post('cat_name'),
           'cat_description'   => $this->input->post('cat_description')
       );

       return $this->db->insert('categories', $data);
   }

	public function get_all_categories()
	{
		$this->db->order_by('cat_name');
		$query = $this->db->get('categories');
		return $query->result();
	}

}
