<?php
class Data_saya extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Data Saya';
        $data['siswa'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('user/kelola_data/data_saya', $data);
        $this->load->view('templates/footer');
    }
}
