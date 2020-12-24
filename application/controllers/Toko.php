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
    function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->library("session");
    }

    public function index()
    {
        $this->load->model('Model_Toko', 'tk');
        $data['data'] = $this->tk->get_data();
        $this->load->view('header');
        $this->load->view('toko/index', $data);
        $this->load->view('footer');
    }
    public function admin_toko()
    {
        $this->load->model('Model_Toko', 'tk');
        $data['data'] = $this->tk->get_data();
        $this->load->view('header');
        $this->load->view('admin/toko', $data);
        $this->load->view('footer');
    }

    public function GetAllData()
    {
        $this->load->model('Model_Toko');
        $data['toko'] = $this->Model_Toko->get_data('toko');
        echo json_encode($data);
    }
    public function tambahToko()
    {
        $this->load->model('Model_Toko', 'tk');
        $data['data'] = $this->tk->get_data();
        $this->load->view('header');
        $this->load->view('admin/tambahToko', $data);
        $this->load->view('footer');
    }
    public function tambahDataToko()
    {
        if ($this->form_validation->run() == false) {
            $data = [
                // 'id' => $this->input->post(''),
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'alamat' => $this->input->post('alamat'),
                'jam_kerja' => $this->input->post('jam_kerja'),
                'gambar' => $this->input->post('gambar')
            ];
            $this->db->insert('toko', $data);
            $this->session->set_flashdata(
                'pesan',
                '<script>
                      Swal.fire({
                          icon: "success",
                          title : "Data Toko Berhasil Tersimpan",
                          type : "success",
                          showConfirmButton: false,
                          timer: 1500
                      })
                  </script>'
            );

            redirect('toko/admin_toko');
        } else {
            $this->tambahToko();
        }
    }
    public function hapusToko($id)
    {
        $this->load->model('Model_Toko', 'tk');
        $where = array('id' => $id);
        $this->tk->delete_data($where, "toko");
        $this->session->set_flashdata(
            'pesan',
            '<script>
            Swal.fire({
                title: "Are you sure?",
                text: "You won\'t be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
              }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire(
                    "Deleted!",
                    "Your file has been deleted.",
                    "success"
                  )
                }
              })
              </script>'
        );
        redirect('toko/admin_toko');
    }

    public function editToko($id)
    {
        $this->load->model('Model_Toko', 'tk');
        $where = array('id' => $id);
        $data['toko'] = $this->tk->edit_data($where, 'toko')->result();
        $data['data'] = $this->db->get('toko')->result_array();
        // var_dump($data['jamu']);
        // die;
        $this->load->view('header');
        $this->load->view('admin/editToko', $data);
        $this->load->view('footer');
    }
}
