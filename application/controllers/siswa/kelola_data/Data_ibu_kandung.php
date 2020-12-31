<?php
class Data_ibu_kandung extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Data Ibu';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('siswa/kelola_data/data_ibu_kandung', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $nama_ibu       = $this->input->post('nama_ibu');
        $berkeb_khs     = $this->input->post('berkebutuhan_khusus');
        $pekerjaan      = $this->input->post('pekerjaan');
        $pendidikan     = $this->input->post('pendidikan');
        $peng_bulanan   = $this->input->post('penghasilan_bulanan');
        $nisn           = $this->input->post('nisn');

        $data = array(
            'nama_ibu'                  => $nama_ibu,
            'berkebutuhan_khusus'       => $berkeb_khs,
            'pekerjaan'                 => $pekerjaan,
            'pendidikan'                => $pendidikan,
            'penghasilan_bulanan'       => $peng_bulanan,
            'nisn'                      => $nisn
        );
        $this->m_ibu->input_data($data, 'data_ibu_kandung');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('siswa/kelola_data/data_periodik');
    }
}
