<?php
class Data_prestasi extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Catatan Prestasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_prestasi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $jenis_prestasi      = $this->input->post('jenis_prestasi');
        $tingkat    = $this->input->post('tingkat');
        $nama_prestasi     = $this->input->post('nama_prestasi');
        $tahun     = $this->input->post('tahun');
        $penyelenggara  = $this->input->post('penyelenggara');
        $nisn               = $this->input->post('nisn');

        $data = array(
            'jenis_prestasi'            => $jenis_prestasi,
            'tingkat'                   => $tingkat,
            'nama_prestasi'             => $nama_prestasi,
            'tahun'                     => $tahun,
            'penyelenggara'             => $penyelenggara,
            'nisn'                      => $nisn
        );
        $this->m_ibu->input_data($data, 'data_prestasi');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('siswa/kelola_data/data_periodik');
    }
}
