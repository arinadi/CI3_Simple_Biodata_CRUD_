<?php
class Pendidikan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_pendidikan_by_profil_id($profil_id) {
        $this->db->where('profil_id', $profil_id);
        $this->db->order_by('start', 'asc');
        $query = $this->db->get('pendidikan');
        return $query->result_array();
    }

    public function get_pendidikan_by_id($id) {
        $query = $this->db->get_where('pendidikan', array('id' => $id));
        return $query->row_array();
    }

    public function create_pendidikan($data) {
        return $this->db->insert('pendidikan', $data);
    }

    public function update_pendidikan($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('pendidikan', $data);
    }

    public function delete_pendidikan($id) {
        return $this->db->delete('pendidikan', array('id' => $id));
    }
}