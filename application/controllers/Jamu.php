<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jamu extends CI_Controller
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
        $this->load->model('Model_Jamu', 'jm');
        $data['data'] = $this->jm->get_data();
        $this->load->view('header');
        $this->load->view('Jamu', $data);
        $this->load->view('footer');
    }
    public function produk($id)
    {
        $where = array('id' => $id);
        $this->load->model('Model_Jamu', 'jm');
        $data['data'] = $this->jm->get_id($where, 'jamu')->result_array();
        $this->load->view('header');
        $this->load->view('produk', $data);
        $this->load->view('footer');
    }
    public function about()
    {
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }

    public function product()
    {
        $this->load->model('Model_Jamu', 'jm');
        $data['data'] = $this->jm->get_data();
        $this->load->view('header');
        $this->load->view('admin/jamu', $data);
        $this->load->view('footer');
    }

    public function tambahJamu()
    {
        $this->load->model('Model_Jamu', 'jm');
        $data['data'] = $this->jm->get_data();
        $this->load->view('header');
        $this->load->view('admin/tambahJamu', $data);
        $this->load->view('footer');
    }
    public function tambahDataJamu()
    {
        $data = [
            // 'id' => $this->input->post(''),
            'nama' => $this->input->post('namaJamu'),
            'deskripsi' => $this->input->post('deskripsi'),
            'khasiat' => $this->input->post('khasiat'),
            'harga' => $this->input->post('harga'),
            'gambar' => $this->input->post('gambar')
        ];
        // var_dump($data);
        // die;
        $this->db->insert('jamu', $data);
        redirect('jamu/product');
    }

    public function hapusjamu($id)
    {
        $this->load->model('Model_Jamu', 'jm');
        $where = array('id' => $id);
        $this->jm->delete_data($where, "jamu");
        redirect('jamu/product');
    }

    function editJamu($id)
    {
        $where = array('id' => $id);
        $this->load->model('Model_Jamu', 'jm');
        $data['jamu'] = $this->jm->edit_data($where, 'jamu')->result();
        $data['data'] = $this->db->get('jamu')->result_array();
        // var_dump($data['jamu']);
        // die;
        $this->load->view('header');
        $this->load->view('admin/editjamu', $data);
        $this->load->view('footer');
    }

    public function update()
    {
        $this->load->model('Model_Jamu', 'jm');
        $data = array(
            // 'id' => $this->input->post(''),
            'nama' => $this->input->post('namaJamu'),
            'deskripsi' => $this->input->post('deskripsi'),
            'khasiat' => $this->input->post('khasiat'),
            'harga' => $this->input->post('harga'),
            'gambar' => $this->input->post('gambar')
        );

        $where = array('id' => $this->input->post('id'));

        $this->jm->update_data($where, $data, 'jamu');
        redirect('jamu/product');
    }
}
