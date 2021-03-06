<?php
class Data_ayah_kandung extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Data Ayah';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_ayah_kandung', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $nama_ayah      = $this->input->post('nama_ayah');
        $berkeb_khs     = $this->input->post('berkebutuhan_khusus');
        $pekerjaan      = $this->input->post('pekerjaan');
        $pendidikan     = $this->input->post('pendidikan');
        $peng_bulanan   = $this->input->post('penghasilan_bulanan');

        $data = array(
            'nama_ayah'                 => $nama_ayah,
            'berkebutuhan_khusus'       => $berkeb_khs,
            'pekerjaan'                 => $pekerjaan,
            'pendidikan'                => $pendidikan,
            'penghasilan_bulanan'       => $peng_bulanan

        );
        $this->m_ayah->input_data($data, 'data_ayah_kandung');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('siswa/kelola_data/data_ibu_kandung');
    }
}
