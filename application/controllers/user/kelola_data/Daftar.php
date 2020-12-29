<?php
class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $this->form_validation->set_rules('nama_lengkap', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $data['user'] = $this->db->get_where('user', ['user_name' => $this->session->userdata('user_name')])->row_array();
        $data['judul'] = 'Daftar';
        $data['siswa'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_siswa', $data);
        $this->load->view('templates/topbar_siswa', $data);
        $this->load->view('user/kelola_data/daftar', $data);
        $this->load->view('templates/footer');
    }
    public function print()
    {
        $data['siswa'] = $this->m_siswa->tampil_data("siswa")->result();
        $this->load->view('user/kelola_data/print_siswa', $data);
    }

    public function tambah()
    {

        $nama                   = $this->input->post('nama_lengkap');
        $jenis_kelamin          = $this->input->post('jenis_kelamin');
        $nisn                   = $this->input->post('nisn');
        $no_ijazah_smp          = $this->input->post('no_seri_ijazah_smp');
        $no_shun                = $this->input->post('no_seri_shun');
        $no_un_smpmts           = $this->input->post('no_un_smp_mts');
        $nik                    = $this->input->post('nik_siswa');
        $ttl                    = $this->input->post('ttl');
        $agama                  = $this->input->post('agama');
        $keb_khusus             = $this->input->post('berkebutuhan_khusus');
        $alamat                 = $this->input->post('alamat_tempat_tinggal');
        $dusun                  = $this->input->post('dusun');
        $rt                     = $this->input->post('rt');
        $rw                     = $this->input->post('rw');
        $kel_des                = $this->input->post('kelurahan_desa');
        $kd_pos                 = $this->input->post('kd_pos');
        $kec                    = $this->input->post('kecamatan');
        $kab_kot                = $this->input->post('kabupaten_kota');
        $prov                   = $this->input->post('provinsi');
        $alat_transport         = $this->input->post('alat_transportasi');
        $jenis_tinggal          = $this->input->post('jenis_tinggal');
        $no_telp                = $this->input->post('no_telp_rumah');
        $email                  = $this->input->post('email');
        $kps                    = $this->input->post('penerima_kps');
        $nokps                  = $this->input->post('no_kps');



        $data = array(

            'nama_lengkap'                      => $nama,
            'jenis_kelamin'             => $jenis_kelamin,
            'nisn'                      => $nisn,
            'no_seri_ijazah_smp'        => $no_ijazah_smp,
            'no_seri_shun'              => $no_shun,
            'no_un_smp_mts'             => $no_un_smpmts,
            'nik_siswa'                 => $nik,
            'ttl'                       => $ttl,
            'agama'                     => $agama,
            'berkebutuhan_khusus'       => $keb_khusus,
            'alamat_tempat_tinggal'     => $alamat,
            'dusun'                     => $dusun,
            'rt'                        => $rt,
            'rw'                        => $rw,
            'kelurahan_desa'            => $kel_des,
            'kd_pos'                    => $kd_pos,
            'kecamatan'                 => $kec,
            'kabupaten_kota'            => $kab_kot,
            'provinsi'                  => $prov,
            'alat_transportasi'         => $alat_transport,
            'jenis_tinggal'             => $jenis_tinggal,
            'no_telp_rumah'             => $no_telp,
            'email'                     => $email,
            'penerima_kps'              => $kps,
            'no_kps'                    => $nokps




        );

        $this->m_siswa->input_data($data, 'siswa');
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('user/kelola_data/data_ayah_kandung');
    }
}
