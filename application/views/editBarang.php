<div class="container">
  <form action="<?= base_url() . "barang/updateBarang" ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" class="form-control" name="id_barang" value="<?= $barang[0]->id_barang; ?>">
    <div class="mb-3">
      <label for="nama barang" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" name="nama_barang" value="<?= $barang[0]->nama_barang; ?>">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Harga Barang</label>
      <input type="text" class="form-control" name="harga_barang" value="<?= $barang[0]->harga_barang; ?>">
    </div>
    <div class="mb-3">
      <label for="stok barang" class="form-label">Stok Barang</label>
      <input type="text" class="form-control" name="stok_barang" value="<?= $barang[0]->stok_barang; ?>">
    </div>
    <div class="mb-3">
      <label for="gambar barang" class="form-label">Gambar Barang</label>
      <img class="d-block" src="<?= base_url(); ?>gambar/<?= $barang[0]->gambar_barang; ?>" alt="gambar barang">
      <input type="file" class="form-control" name="gambar_barang">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>