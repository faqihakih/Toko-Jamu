<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('model_toko', 'tk');
        $data['data'] = $this->tk->get_data();
        $this->load->view('header');
        $this->load->view('toko/index', $data);
        $this->load->view('footer');
    }
    // public function produk($id)
    // {
    //     $where = array('id' => $id);
    //     $this->load->model('model_jamu', 'jm');
    //     $data['data'] = $this->jm->get_id($where, 'jamu')->result_array();
    //     $this->load->view('header');
    //     $this->load->view('produk', $data);
    //     $this->load->view('footer');
    // }
    public function admin_toko()
    {
        $this->load->model('model_toko', 'tk');
        $data['data'] = $this->tk->get_data();
        $this->load->view('header');
        $this->load->view('admin/toko', $data);
        $this->load->view('footer');
    }

    public function jsonGetAllData()
    {
        $this->load->model('Model_toko');
        $data['toko'] = $this->Model_toko->get_data('toko');
        echo json_encode($data);
    }
}
