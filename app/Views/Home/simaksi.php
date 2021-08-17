<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Pesawat</h1>
    </div>
  </section>
  <div class="row">
    <div class="col-4">
      <div class="card-body p-0">
        <form action="<?= base_url('Home/tiketSimaksi'); ?>" method="post">
          <div class="item form-group">
            <label for="gunung">Pilih Gunung</label>
            <div class="input-group mb-3">
              <select class="custom-select" name="gunung" id="gunung" required>
                <option value=" ">-Pilih Gunung-</option>
                <option value="Gunung Arjuna">Gunung Arjuna</option>
                <option value="Gunung Penanggungan">Gunung Penanggungan</option>
                <option value="Gunung Willis">Gunung Willis</option>
                <option value="Gunung Buthak">Gunung Buthak</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label for="tanggalBerangkat"> Tanggal Keberangkat</label>
            <div class="item form-group mb-3">
              <input type="date" class="form-control" name="tanggalBerangkat" id="tanggalBerangkat" value="" required>
            </div>
          </div>
          <div class="item form-group">
            <label for="tipeKursi">Jumlah Anggota</label>
            <div class="input-group mb-3">
              <select class="custom-select" name="tipeKursi" id="tipeKursi" onchange="hargaPendakian()" required>
                <option value=" ">-Pilih Jumlah Anggota-</option>
                <option value="30000">1</option>
                <option value="60000">2</option>
                <option value="90000">3</option>
                <option value="120000">4</option>
                <option value="150000">5</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label for="harga">Total Harga</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">RP.</span>
              </div>
              <input type="text" class="form-control" name="harga" id="harga" readonly>
              <script type="text/javascript">
                function hargaPendakian() {
                  var data = document.getElementById("tipeKursi").value;
                  document.getElementById("harga").value = data;
                }
              </script>
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 offset-md-12">
            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#berhasil">Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="berhasil">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pesanan Berhasil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>