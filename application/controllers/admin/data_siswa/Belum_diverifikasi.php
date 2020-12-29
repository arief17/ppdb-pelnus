<?php
class Belum_diverifikasi extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();

        //memanggil model tampil data
        $data['siswa'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kelola_data/data_siswa/belum_diverifikasi', $data);
        $this->load->view('templates/footer');
    }
}
