<?php

class Barang_model extends CI_Model
{

  public $title;
  public $content;
  public $date;

  public function getBarang()
  {
    $query = $this->db->get('barang');
    return $query->result();
  }

  public function simpanBarang($data)
  {
    return $this->db->insert('barang', $data);
  }
  public function deleteBarangById($data)
  {
    return $this->db->delete('barang', array('id_barang' => $data));
  }
  public function getBarangById($data)
  {
    $query = $this->db->get_where('barang', array('id_barang' => $data));
    return $query->result();
  }
  public function updateBarangTerbaru($data, $id)
  {
    $this->db->where('id_barang', $id);
    $this->db->update('barang', $data);
    return true;
  }
}
