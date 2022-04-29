<?php
class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('view_form_mahasiswa');
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kls' => $this->input->post('kls'),
            'tgl' => $this->input->post('tgl'),
            'tmp' => $this->input->post('tmp'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('view_data_mahasiswa', $data);
    }
}
