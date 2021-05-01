<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['pegawai'] = $this->db->get('tb_user')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer', $data);
	}
	public function spk()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// $data['pegawai'] = $this->db->get('tb_user')->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/spk', $data);
		$this->load->view('template/footer', $data);
	}
	// siswa
	public function siswa()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['siswa'] = $this->M_admin->data_siswa();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/siswa', $data);
		$this->load->view('template/footer', $data);
	}
	public function tambah_siswa()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['siswa'] = $this->M_admin->data_siswa();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/tambah_siswa', $data);
		$this->load->view('template/footer', $data);
	}
	public function proses_add_siswa()
	{
		$this->form_validation->set_rules('nis', 'Nis', 'trim|required');
		$this->form_validation->set_rules('nama_siswa', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('rombel', 'Rombel', 'trim|required');
		$this->form_validation->set_rules('ttl', 'TTL', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'JK', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			$data['siswa'] = $this->M_admin->data_siswa();
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('admin/tambah_siswa', $data);
			$this->load->view('template/footer', $data);
		}else{
			$this->M_admin->add_siswa();
			$this->M_admin->add_detail_siswa();
			redirect('admin/siswa');
		}
	}
	public function detail_siswa()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$id = $this->uri->segment(3);
		$data['siswa'] = $this->M_admin->detail_siswa($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/detail_siswa', $data);
		$this->load->view('template/footer', $data);
	}
	public function edit_siswa()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$id = $this->uri->segment(3);
		$data['siswa'] = $this->M_admin->detail_siswa($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/edit_siswa', $data);
		$this->load->view('template/footer', $data);
	}
	public function update_siswa()
    {
        $id_siswa = $this->input->post('id_siswa');
        $nis = $this->input->post('nis');
        $nama_siswa = $this->input->post('nama_siswa');
        $kelas = $this->input->post('kelas');
        $rombel = $this->input->post('rombel');
        $ttl = $this->input->post('ttl');
        $jenis_kelamin = $this->input->post('jenis_kelamin');

        $datas = array(
            'nis' => $nis,
            'nama_siswa' => $nama_siswa,
            'kelas' => $kelas,
            'rombel' => $rombel,
            );
        $datad = array(
            'nis' => $nis,
            'nama_siswa' => $nama_siswa,
            'ttl' => $ttl,
            'jenis_kelamin' => $jenis_kelamin
            );
        $where = array(
        	'id_siswa' => $id_siswa
        );
        $whered = array(
        	'siswa_id' => $id_siswa
        );

        $this->M_admin->update_siswa($where, $datas, 'tb_siswa');
        $this->M_admin->update_detail_siswa($whered, $datad, 'detail_siswa');
        redirect('admin/siswa');
    }
    public function hapus_siswa()
	{
		$id_siswa = $this->uri->segment(3);
		$where = array(
            'id_siswa' => $id_siswa
        );
        $whered = array(
            'siswa_id' => $id_siswa
        );

        $this->M_admin->delete_siswa($where, 'tb_siswa');
        $this->M_admin->delete_detail_siswa($whered, 'detail_siswa');
        // $this->session->set_flashdata('Lawyer');
        redirect('admin/siswa');
	}
	// nilai
	public function nilai()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['nilai'] = $this->M_admin->data_nilai();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/nilai', $data);
		$this->load->view('template/footer', $data);
	}
	public function edit_nilai()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$id = $this->uri->segment(3);
		$data['siswa'] = $this->M_admin->data_siswa();
		$data['nilai'] = $this->M_admin->edit_nilai($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/edit_nilai', $data);
		$this->load->view('template/footer', $data);
	}
	public function tambah_nilai()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['nilai'] = $this->M_admin->data_nilai();
		$data['siswa'] = $this->M_admin->data_siswa();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/tambah_nilai', $data);
		$this->load->view('template/footer', $data);
	}
	public function proses_add_nilai()
	{
		$hasil = $this->db->query("select kode_nilai from tb_nilai ORDER BY kode_nilai DESC LIMIT 1");
        if ($hasil->num_rows() > 0) {
            $nmr = explode('_', $hasil->row()->kode_nilai);
            $kode = sprintf("%04d", $nmr[1] + 1);
        } else {
            $kode = '001';
        }

		$this->form_validation->set_rules('id_siswa', 'Siswa', 'trim|required');
		$this->form_validation->set_rules('raport', 'Raport', 'trim|required');
		$this->form_validation->set_rules('prilaku', 'Prilaku', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			$data['nilai'] = $this->M_admin->data_nilai();
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('admin/tambah_nilai', $data);
			$this->load->view('template/footer', $data);
		}else{
			$kode_nilai = 'N_'.$kode; 
			// echo $kode_nilai;
			$this->M_admin->add_nilai($kode_nilai);
			$this->M_admin->add_detail_nilai($kode_nilai);
			redirect('admin/nilai');
		}
	}
	public function update_nilai()
    {
        $id_siswa = $this->input->post('id_siswa');
        $kode_nilai = $this->input->post('kode_nilai');
        $raport = $this->input->post('raport');
        $prilaku = $this->input->post('prilaku');

        $datan = array(
            'raport' => $raport,
            'prilaku' => $prilaku,
            );
        $where = array(
        	'kode_nilai' => $kode_nilai
        );

        $this->M_admin->update_nilai($where, $datan, 'tb_nilai');
        redirect('admin/nilai');
    }

    public function hapus_nilai()
	{
		$id_nilai = $this->uri->segment(3);
		$where = array(
            'id_nilai' => $id_nilai
        );
        $wheren = array(
            'nilai_id' => $id_nilai
        );

        $this->M_admin->delete_nilai($where, 'tb_nilai');
        $this->M_admin->delete_detail_nilai($wheren, 'detail_nilai');
        // $this->session->set_flashdata('Lawyer');
        redirect('admin/nilai');
	}

	// prestasi
	public function prestasi()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['prestasi'] = $this->M_admin->data_prestasi();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/prestasi', $data);
		$this->load->view('template/footer', $data);
	}
	public function tambah_prestasi()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['siswa'] = $this->M_admin->data_siswa();
		$data['pelajaran'] = $this->M_admin->data_pelajaran();
		$data['prestasi'] = $this->M_admin->data_prestasi();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/tambah_prestasi', $data);
		$this->load->view('template/footer', $data);
	}
	public function proses_add_prestasi()
	{
		$this->form_validation->set_rules('id_siswa', 'Siswa', 'trim|required');
		$this->form_validation->set_rules('prestasi', 'Prestasi', 'trim|required');
		$this->form_validation->set_rules('mapel', 'Mapel', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			$data['siswa'] = $this->M_admin->data_siswa();
			$data['pelajaran'] = $this->M_admin->data_pelajaran();
			$data['prestasi'] = $this->M_admin->data_prestasi();
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('admin/tambah_prestasi', $data);
			$this->load->view('template/footer', $data);
		}else{
			// echo $kode_nilai;
			$this->M_admin->add_prestasi();
			redirect('admin/prestasi');
		}
	}
	public function edit_prestasi()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$id = $this->uri->segment(3);
		$data['siswa'] = $this->M_admin->data_siswa();
		$data['prestasi'] = $this->M_admin->edit_prestasi($id);
		$data['pelajaran'] = $this->M_admin->data_pelajaran();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/edit_prestasi', $data);
		$this->load->view('template/footer', $data);
	}
	public function update_prestasi()
    {
        $id_prestasi = $this->input->post('id_prestasi');
        $id_siswa = $this->input->post('id_siswa');
        // $nama_siswa = $this->input->post('nama_siswa');
        $prestasi = $this->input->post('prestasi');
        $mapel = $this->input->post('mapel');

        $data = array(
            'siswa_id' => $id_siswa,
            'prestasi' => $prestasi,
            'mapel' => $mapel,
            );
        $where = array(
        	'id_prestasi' => $id_prestasi
        );

        $this->M_admin->update_prestasi($where, $data, 'tb_prestasi');
        redirect('admin/prestasi');
    }
    public function hapus_prestasi()
	{
		$id_prestasi = $this->uri->segment(3);
		$where = array(
            'id_prestasi' => $id_prestasi
        );

        $this->M_admin->delete_prestasi($where, 'tb_prestasi');
        // $this->session->set_flashdata('Lawyer');
        redirect('admin/prestasi');
	}

	// user
	public function user()
	{
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_user'] = $this->M_admin->data_user();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/user', $data);
		$this->load->view('template/footer', $data);
	}

}
