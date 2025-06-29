<input type="hidden" name="username" value="<?= session()->get('username') ?>">
<input type="hidden" name="total_harga" id="total_harga" value="">

<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" value="<?= session()->get('username') ?>" readonly>
</div>

<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" required>
</div>
<!-- menggunaka select2 -->
<div class="mb-3">
    <label for="kelurahan" class="form-label">Kelurahan</label>
    <select class="form-control" name="kelurahan" id="kelurahan" required></select>
</div>

<div class="mb-3">
    <label for="layanan" class="form-label">Layanan</label>
     <select class="form-control" name="layanan" id="layanan" required></select>
</div>

<div class="mb-3">
    <label for="ongkir" class="form-label">Ongkir</label>
    <input type="text" class="form-control" id="ongkir" name="ongkir" readonly>
</div>

<div class="mb-3">
    <label for="total" class="form-label">Total Harga</label>
    <input type="text" class="form-control" id="total_display" readonly value="Rp <?= number_format($total, 0, ',', '.') ?>">
</div>
 <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($items)): ?>
              <?php foreach ($items as $item): ?>
                <tr>
                  <td><?= $item['name'] ?></td>
                  <td><?= number_to_currency($item['price'], 'IDR') ?></td>
                  <td><?= $item['qty'] ?></td>
                  <td><?= number_to_currency($item['subtotal'], 'IDR') ?></td>
                </tr>
              <?php endforeach; ?>
              <tr>
                <td colspan="3" class="text-end fw-bold">Total</td>
                <td><?= number_to_currency($total, 'IDR') ?></td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>