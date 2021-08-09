<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Joint extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('inspect_model');
        $this->load->helper('url');
    }

    public function index()
    {

        $data['title'] = 'Joint Inspection';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Inspect_model', 'inspection');



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('join/dokumen', $data);
        $this->load->view('templates/footer');
    }

    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|xls|xlsx|pdf';
        $config['max_size']             = 5000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('join/dokumen', $error);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'file' => $this->upload->data('file_name'),
                'bulan' => $this->input->post('bulan'),
                'tahun' => $this->input->post('tahun'),
                'format' => $this->upload->data('file_ext'),
                'tanggal' => date('Y-m-d H:i:s')
            ];
            $this->db->insert('db_inject', $data);
            redirect('joint/kategori');
        }
    }

    public function kategori()
    {
        $data['title'] = 'Kategori file';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['inject'] = $this->db->get('db_inject')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('join/kategori_file', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_data($id)
    {

        $this->db->where('id', $id);

        $data = $this->inspect_model->getDataById($id)->row();
        $nama = './uploads/' . $data->file;

        if (is_readable($nama) && unlink($nama)) //fungsi untuk membaca file
        {
            $this->inspect_model->hapus_data($id);
            redirect('joint/kategori');
        } else if (!is_readable($nama)) {
            $this->inspect_model->hapus_data($id);
            redirect('joint/kategori');
        } else {
            echo 'gagal';
        }
    }

    public function download($id)
    {
        $data = $this->db->get_where('db_inject', ['file' => $id])->row();
        force_download('uploads/' . $data->file, NULL);
    }

    public function lihat($id)
    {
        $this->db->select('*');
        $this->db->from('db_inject');
        $this->db->where('id', $id);

        return $this->db->get();
    }

    public function edit($id)
    {
        $data['title'] = 'Edit File';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->inspect_model->getDataById($id)->row();
        $where = array('id' => $id);
        $data['user_kat'] = $this->inspect_model->edit_data($where, 'db_inject')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('join/edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function editUpload()
    {
        $id = $this->input->post('id');
        $data = $this->inspect_model->getDataById($id)->row();
        // var_dump($data);
        // die;
        $nama = './uploads/' . $data->file;
        // $x = is_readable($nama) && unlink($nama);

        if (is_readable($nama) && unlink($nama)) //fungsi untuk membaca file
        {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'doc|docx|xls|xlsx|pdf';
            $config['max_size']             = 5000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());

                var_dump($error);
            } else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'file' => $this->upload->data('file_name'),
                    'bulan' => $this->input->post('bulan'),
                    'tahun' => $this->input->post('tahun'),
                    'format' => $this->upload->data('file_ext'),
                    'tanggal' => date('Y-m-d H:i:s')
                ];

                $this->inspect_model->updateFile($id, $data);

                redirect('joint/kategori');
            }
        } else {
            echo "Gagal";
        }
    }

    function update()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $file = $this->upload->data('file');
        $format = $this->upload->data('file_ext');

        $data = array(
            'judul' => $judul,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'file' => $file,
            'format' => $format
        );

        $where = array(
            'id' => $id
        );

        $this->inspect_model->update_data($where, $data, 'db_inject');
        redirect('joint/kategori');
    }
}
