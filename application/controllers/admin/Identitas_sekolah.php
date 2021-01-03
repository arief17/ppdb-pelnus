<?php
class Identitas_sekolah extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Identitas Sekolah';
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();

        //memanggil model tampil data
        $data['siswa'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/identitas_sekolah', $data);
        $this->load->view('templates/footer');
    }

}
