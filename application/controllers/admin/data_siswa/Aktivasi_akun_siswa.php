<?php
class Aktivasi_akun_siswa extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Aktivasi Akun Siswa';
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();

        //memanggil model tampil data
        $data['siswa'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kelola_data/data_siswa/aktivasi_akun_siswa', $data);
        $this->load->view('templates/footer');
    }

}
