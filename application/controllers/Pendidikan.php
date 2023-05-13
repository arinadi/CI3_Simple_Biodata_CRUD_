<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Pendidikan_model');
    }

    public function create($profil_id)
    {
        $this->form_validation->set_rules('start', 'Tahun Mulai', 'required');
        $this->form_validation->set_rules('end', 'Tahun Selesai', 'required');
        $this->form_validation->set_rules('jenjang', 'Jenjang Pendidikan', 'required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $data['profil_id'] = $profil_id;
            $this->load->view('input_pendidikan', $data);
        }
        else
        {
            $data = array(
                'profil_id' => $profil_id,
                'jenjang' => $this->input->post('jenjang'),
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'start' => $this->input->post('start'),
                'end' => $this->input->post('end')
            );
            $this->Pendidikan_model->create_pendidikan($data);
            redirect('biodata/detail/'.$profil_id);
        }
    }

    public function edit($id)
    {
        $data['pendidikan'] = $this->Pendidikan_model->get_pendidikan_by_id($id);
        $this->form_validation->set_rules('start', 'Tahun Mulai', 'required');
        $this->form_validation->set_rules('end', 'Tahun Selesai', 'required');
        $this->form_validation->set_rules('jenjang', 'Jenjang Pendidikan', 'required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('edit_pendidikan', $data);
        }
        else
        {
            $input = array(
                'jenjang' => $this->input->post('jenjang'),
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'start' => $this->input->post('start'),
                'end' => $this->input->post('end')
            );
            $this->Pendidikan_model->update_pendidikan($input, $id);
            redirect('biodata/detail/'.$data['pendidikan']['profil_id']);
        }
    }

    public function delete($id)
    {
        $data['pendidikan'] = $this->Pendidikan_model->get_pendidikan_by_id($id);
        $this->Pendidikan_model->delete_pendidikan($id);
        redirect('biodata/detail/'.$data['pendidikan']['profil_id']);
    }

}
