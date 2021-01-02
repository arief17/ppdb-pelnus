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

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['siswa'] = $this->m_siswa->tampil_data('siswa')->result();

        $this->load->view('laporan_pdf', $data);

        // setting page
        $paper_size     = 'A4';
        $orientation     = 'landscape';
        $html             = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        // convert pdf
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan siswa.pdf", array('Attachment' => 0));
    }
    public function excel(){
        $data['siswa'] = $this->m_siswa->tampil_data('siswa')->result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getproperties()->setCreator("Admin PPDM SMK Pelnus");
        $object->getproperties()->setLastModifiedBy("Admin PPDM SMK Pelnus");
        $object->getproperties()->setTitle("Formulir Pendaftaran");
        $object->setActiveSheetIndex(0);
    }
}
