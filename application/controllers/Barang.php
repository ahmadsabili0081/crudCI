<?php

class Barang extends CI_Controller
{
  public function index()
  {
    $data = array('judul' => 'Halaman Barang');
    $this->load->model('Barang_model');
    $this->data['barang'] = $this->Barang_model->getBarang();
    $this->load->view('templates/header', $data);
    $this->load->view('list_data_barang', $this->data);
    $this->load->view('templates/footer');
  }
  public function tambahBarang()
  {
    $data = array(
      'nama_barang' => $this->input->post('nama_barang'),
      'harga_barang' => $this->input->post('harga_barang'),
      'stok_barang' => $this->input->post('stok_barang'),
      'gambar_barang' => $_FILES['gambar_barang']['name'],
    );
    $this->load->model('Barang_model');
    $this->Barang_model->simpanBarang($data);
    // move gambar barang
    move_uploaded_file($_FILES['gambar_barang']['tmp_name'], "gambar/" . $_FILES['gambar_barang']['name']);
    $this->session->set_flashdata('Pesan', 'Data berhasil ditambahkan');
    redirect(base_url() . 'Barang');
  }
  public function deleteBarang($data)
  {
    $this->load->model('Barang_model');
    $this->Barang_model->deleteBarangById($data);
    redirect(base_url() . 'Barang');
  }
  public function editBarang($id)
  {
    $this->load->model('Barang_model');
    $this->data['barang'] = $this->Barang_model->getBarangById($id);
    $this->load->view("templates/header");
    $this->load->view('editBarang', $this->data);
    $this->load->view('templates/footer');
  }
  public function updateBarang()
  {
    // jika gambar barang tidak diubah
    if (!empty($_FILES['gambar_barang']['name'])) {
      $data = array(
        'nama_barang' => $this->input->post('nama_barang'),
        'harga_barang' => $this->input->post('harga_barang'),
        'stok_barang' => $this->input->post('stok_barang'),
        'gambar_barang' => $_FILES['gambar_barang']['name'],
      );
      $this->load->model('Barang_model');
      $this->Barang_model->updateBarangTerbaru($data, $this->input->post('id_barang'));
      // move gambar barang
      move_uploaded_file($_FILES['gambar_barang']['tmp_name'], "gambar/" . $_FILES['gambar_barang']['name']);
      $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
      redirect(base_url() . 'Barang');
    } else {
      $data = array(
        'nama_barang' => $this->input->post('nama_barang'),
        'harga_barang' => $this->input->post('harga_barang'),
        'stok_barang' => $this->input->post('stok_barang'),
      );
      $this->load->model('Barang_model');
      $this->Barang_model->updateBarangTerbaru($data, $this->input->post('id_barang'));
      redirect(base_url() . 'Barang');
    }
  }
}
