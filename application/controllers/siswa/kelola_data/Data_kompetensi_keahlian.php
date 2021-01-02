<?php
class Data_kompetensi_keahlian extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Data Kompetensi Keahlian';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_kompetensi_keahlian', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $nama_kompetensi      = $this->input->post('nama_kompetensi');

        $data = array(
            'nama_kompetensi'                 => $nama_kompetensi
        );
        $this->m_kompetensi->input_data($data, 'kompetensi_keahlian');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('siswa/kelola_data/data_periodik');
    }
}
