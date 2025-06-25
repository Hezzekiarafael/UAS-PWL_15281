<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>

<div class="pc-container">
    <div class="pc-content">
    <div class="card table-card">
    <div class="card-header">
        <section id="product-table" class="py-5">
            <div class="container">
            <?php
            if (session()->getFlashData('success')) {
            ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <?= session()->getFlashData('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>
            <?php
            if (session()->getFlashData('failed')) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashData('failed') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                Tambah Data
            </button>
           <a type="button" class="btn btn-primary" href="<?= base_url('produk/download') ?>">
             Download Data
            </a>
                        
        
            <!-- table data -->
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title divider text-center mb-4">Daftar Buku</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered  text-center align-middle datatable w-100">
                                <thead class="">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($product as $index => $produk) : ?>
                                            <tr>
                                                <th scope="row"><?= $index + 1 ?></th>
                                                <td><?= $produk['nama'] ?></td>
                                                <td><?= $produk['harga'] ?></td>
                                                <td><?= $produk['jumlah'] ?></td>
                                                <td>
                                                    <?php if (!empty($produk['foto']) && file_exists("img/" . $produk['foto'])) : ?>
                                                        <img src="<?= base_url("img/" . $produk['foto']) ?>" width="100px">
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal-<?= $produk['id'] ?>">
                                                        Ubah
                                                    </button>
                                                    <a href="<?= base_url('produk/delete/' . $produk['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini ?')">
                                                        Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                            <!-- Edit Modal Begin -->
                                            <div class="modal fade" id="editModal-<?= $produk['id'] ?>" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="<?= base_url('produk/edit/' . $produk['id']) ?>" method="post" enctype="multipart/form-data">
                                                            <?= csrf_field(); ?>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="name">Nama</label>
                                                                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $produk['nama'] ?>" placeholder="Nama Barang" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="name">Harga</label>
                                                                    <input type="text" name="harga" class="form-control" id="harga" value="<?= $produk['harga'] ?>" placeholder="Harga Barang" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="name">Jumlah</label>
                                                                    <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $produk['jumlah'] ?>" placeholder="Jumlah Barang" required>
                                                                </div>
                                                                <img src="<?php echo base_url() . "img/" . $produk['foto'] ?>" width="100px">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="check" name="check" value="1">
                                                                    <label class="form-check-label" for="check">
                                                                        Ceklis jika ingin mengganti foto
                                                                    </label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="name">Foto</label>
                                                                    <input type="file" class="form-control" id="foto" name="foto">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Edit Modal End -->
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- table data -->
            <!-- Add Modal Begin -->
            <div class="modal fade" id="addModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('produk') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Jumlah</label>
                                    <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah Barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Add Modal End -->

    </div>
    </section>

    </div>
    </div>
    </div>
</div>

<?= $this->endSection() ?>



