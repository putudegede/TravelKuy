<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kereta</h1>
    </div>
  </section>
  <div class="row">
    <div class="col-4">
      <div class="card-body p-0">
        <form action="<?= base_url('Home/tiketKereta'); ?>" method="post">
          <div class="item form-group">
            <label for="kotaAsal">Kota Asal</label>
            <div class="input-group mb-3">
              <select class="custom-select" name="kotaAsal" id="kotaAsal" onchange="stasiun()" required>
                <option value=" ">-Pilih Kota-</option>
                <option value="Stasiun Gubeng">Surabaya</option>
                <option value="Stasiun Pasar Senen">Jakarta</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label for="stasiunAsal">Stasiun Keberangkatan</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="stasiunAsal" id="stasiunAsal" readonly>
              <script type="text/javascript">
                function stasiun() {
                  var data = document.getElementById("kotaAsal").value;
                  document.getElementById("stasiunAsal").value = data;
                }
              </script>
            </div>
          </div>
          <div class="item form-group">
            <label for="kotaTujuan">Kota Tujuan</label>
            <div class="input-group mb-3">
              <select class="custom-select" name="kotaTujuan" id="kotaTujuan" onchange="stasiunTujuan()" required>
                <option value=" ">-Pilih Kota-</option>
                <option value="Stasiun Gubeng">Surabaya</option>
                <option value="Stasiun Pasar Senen">Jakarta</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label for="stasiunTiba">Tiba Di Stasiun</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="stasiunTiba" id="stasiunTiba" readonly>
              <script type="text/javascript">
                function stasiunTujuan() {
                  var data = document.getElementById("kotaTujuan").value;
                  document.getElementById("stasiunTiba").value = data;
                }
              </script>
            </div>
          </div>
          <div class="item form-group">
            <label for="jamKeberangkatan">Jam Keberangkatan</label>
            <div class="input-group mb-3">
              <select class="custom-select" name="jamKeberangkatan" id="jamKeberangkatan" onchange="jam()" required>
                <option value=" ">-Pilih Jadwal-</option>
                <option value="01 : 00">01 : 00</option>
                <option value="05 : 00">05 : 00</option>
                <option value="09 : 00">09 : 00</option>
                <option value="13 : 00">13 : 00</option>
                <option value="17 : 00">17 : 00</option>
                <option value="21 : 00">21 : 00</option>
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
            <div class="input-group mb-3">
              <input type="hidden" class="form-control" name="jamBerangkat" id="jamBerangkat" readonly>
              <script type="text/javascript">
                function jam() {
                  var data = document.getElementById("jamKeberangkatan").value;
                  document.getElementById("jamBerangkat").value = data;
                }
              </script>
            </div>
          </div>
          <div class="item form-group">
            <label for="tipeKursi">PIlih Kelas</label>
            <div class="input-group mb-3">
              <select class="custom-select" name="tipeKursi" id="tipeKursi" onchange="hargaPesawat()" required>
                <option value=" ">-Pilih Kelas-</option>
                <option value="100000">Economy Class</option>
                <option value="200000">Bussiness Class</option>
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
                function hargaPesawat() {
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
            <button type="submit" class="btn btn-primary">Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>