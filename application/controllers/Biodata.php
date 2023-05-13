<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Biodata_model');
        $this->load->model('Pendidikan_model');
    }

    public function input() {
        $this->load->view('input_biodata');
    }

    public function save_biodata() {
        $this->load->library('form_validation');

        // konfigurasi untuk upload gambar
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048; // 2 MB
        $config['max_width'] = 1024;
        $config['max_height'] = 1024;

        $this->load->library('upload', $config);

        // validasi form input
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            // jika validasi form gagal, tampilkan pesan error
            $this->load->view('form_biodata');
        } else {
            // jika validasi form sukses, simpan data biodata ke database
            $data = array(
                'nama' => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'status' => $this->input->post('status'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'no' => $this->input->post('no_telp'),
                'email' => $this->input->post('email')
            );

            $this->Biodata_model->insert_biodata($data);

            redirect('/biodata', 'refresh');

            // upload foto
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('input_biodata', $error);
            } else {
                $data = array('upload_data' => $this->upload->data());
                $this->load->view('sukses_upload', $data);
            }
        }
    }

    public function index()
    {
        $data['biodata'] = $this->Biodata_model->get_all_biodata();
        $this->load->view('list_biodata', $data);
    }

    public function detail($id)
    {
        $data['biodata'] = $this->Biodata_model->get_biodata_by_id($id);
        $data['pendidikan'] = $this->Pendidikan_model->get_pendidikan_by_profil_id($id);

        $this->load->view('detail_biodata', $data);
    }

    public function edit($id)
{
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 2048;
    $config['max_width'] = 1024;
    $config['max_height'] = 768;
    
    $this->load->library('upload', $config);
    
    // validasi input dari form edit
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('agama', 'Agama', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
    $this->form_validation->set_rules('no_telp', 'No. Telp', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    
    if ($this->form_validation->run() == FALSE)
    {
        $data['biodata'] = (array) $this->Biodata_model->get_biodata_by_id($id);
        $this->load->view('edit_biodata', $data);
    }
    else
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'status' => $this->input->post('status'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'no' => $this->input->post('no_telp'),
            'email' => $this->input->post('email')
        );
        
        $this->Biodata_model->update_biodata($id, $data);
        redirect('biodata');
    }
    
}
public function delete($id)
{
    $this->Biodata_model->delete_biodata($id);
    redirect('biodata');
}
}
