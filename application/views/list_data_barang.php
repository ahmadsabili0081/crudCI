<div class="container mt-5">

  <?php if ($this->session->flashdata('sukses')) { ?>
    <div class="alert alert-success"> <?= $this->session->flashdata('pesan') ?> </div>
  <?php } ?>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data
  </button>
  <table id="example" class="table table-striped mt-5" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Stok Barang</th>
        <th>Gambar Barang</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1 ?>
      <?php foreach ($barang as $barangDetail) :  ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $barangDetail->nama_barang; ?></td>
          <td><?= $barangDetail->harga_barang; ?></td>
          <td><?= $barangDetail->stok_barang; ?></td>
          <td><img width="100px" src="gambar/<?= $barangDetail->gambar_barang; ?>" alt=""></td>
          <td>
            <a class="btn btn-success" role="button" href="<?= base_url() . "barang/editBarang/$barangDetail->id_barang"; ?>">Edit</a>
            <a class="btn btn-danger" role="button" href="<?= base_url() . "barang/deleteBarang/$barangDetail->id_barang"; ?>">Delete</a>
          </td>
        </tr>
        <?php $no++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url() . "barang/tambahBarang"; ?>" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_barang" required>
          </div>
          <div class="mb-3">
            <label for="harga barang" class="form-label">Harga Barang</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="harga_barang" required>
          </div>
          <div class="mb-3">
            <label for="Stok barang" class="form-label">Stok Barang</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="stok_barang" required>
          </div>
          <div class="mb-3">
            <label for="gambar barang" class="form-label">Gambar Barang</label>
            <input type="file" class="form-control" id="exampleFormControlInput1" name="gambar_barang" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>