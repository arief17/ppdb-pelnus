<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_utama extends CI_Controller
{

	public function index()
	{

		$data['user'] = $this->m_user->tampil_user()->result();
		// $data['siswa'] = $this->m_siswa->tampil_siswa()->result();
		$this->load->view('dashboard/index', $data);
	}
}
