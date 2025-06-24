 <?= form_open('buy', 'class="row g-3"') ?>
<?= form_hidden('username', session()->get('username')) ?>
<?= form_input(['type' => 'hidden', 'name' => 'total_harga', 'id' => 'total_harga', 'value' => '']) ?>

<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" value="<?= session()->get('username') ?>" readonly>
</div>

<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" required>
</div>

<div class="mb-3">
    <label for="kelurahan" class="form-label">Kelurahan</label>
    <select name="kelurahan" id="kelurahan" class="form-select" required>
        <option value="">-- Pilih Kelurahan --</option>
        <!-- <option value="...">...</option> -->
    </select>
</div>

<div class="mb-3">
    <label for="layanan" class="form-label">Layanan</label>
    <select name="layanan" id="layanan" class="form-select" required>
        <option value="">-- Pilih Layanan --</option>
        <!-- <option value="...">...</option> -->
    </select>
</div>

<div class="mb-3">
    <label for="ongkir" class="form-label">Ongkir</label>
    <input type="text" class="form-control" id="ongkir" name="ongkir" readonly>
</div>

<div class="mb-3">
    <label for="total" class="form-label">Total Harga</label>
    <input type="text" class="form-control" id="total_display" readonly value="Rp <?= number_format($total, 0, ',', '.') ?>">
</div>

<div class="text-center">
    <button type="submit" class="btn btn-primary">Buat Pesanan</button>
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

<?= form_close() ?>
