<?php
class Contoh1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Perkenalkan</h1>";
        echo "Nama saya Ilham bayu aji saya tingal di pesing
        hobi saya tidur";
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view_latihan1', $data);
    }
}
