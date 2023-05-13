<?php
class Biodata_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function insert_biodata($data) {
    $this->db->insert('profil', $data);
  }

  public function get_all_biodata()
  {
      $query = $this->db->get('profil');
      return $query->result();
  }
  public function get_biodata_by_id($id)
  {
      $this->db->where('id', $id);
      $query = $this->db->get('profil');
      return $query->row();
  }

  public function update_biodata($id, $data)
  {
      $this->db->where('id', $id);
      $this->db->update('profil', $data);
  }
  public function delete_biodata($id) {
    return $this->db->delete('profil', array('id' => $id));
    return $this->db->delete('pendidikan', array('profil_id' => $id));
}
}
