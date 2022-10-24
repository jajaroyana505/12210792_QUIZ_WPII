<?php
class ControllerMahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa');
    }

    function index()
    {
        $data['mahasiswa'] = $this->mahasiswa->get_mahasiswa();
        var_dump($data);
        $this->load->view('view_mahasiswa', $data);
    }

    function hapus($mhs_id)
    {
        // echo 'hapus';
        // $mhs_id = $this->uri->segment(3);
        $this->mahasiswa->delete($mhs_id);
        redirect('controllermahasiswa');
    }
}
