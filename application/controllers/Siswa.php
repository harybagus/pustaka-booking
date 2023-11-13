<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('view-form-siswa');
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggalLahir' => $this->input->post('tanggal-lahir'),
            'tempatLahir' => $this->input->post('tempat-lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenisKelamin' => $this->input->post('jenis-kelamin'),
            'agama' => $this->input->post('agama'),
        ];

        $this->load->view('view-data-siswa', $data);
    }
}

?>