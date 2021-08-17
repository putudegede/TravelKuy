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
        <form action="<?= base_url('Home/tiketPesawat'); ?>" method="post">
          <div class="item form-group">
            <label for="kotaAsal">Kota Asal</label>
            <div class="input-group mb-3">
              <select class="custom-select" name="kotaAsal" id="kotaAsal" onchange="bandara()" required>
                <option value=" ">-Pilih Kota-</option>
                <option value="Juanda International Airports">Surabaya</option>
                <option value="Soekarna Hatta International Airports">Jakarta</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label for="bandaraAsal">Bandara Keberangkatan</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="bandaraAsal" id="bandaraAsal" readonly>
              <script type="text/javascript">
                function bandara() {
                  var data = document.getElementById("kotaAsal").value;
                  document.getElementById("bandaraAsal").value = data;
                }
              </script>
            </div>
          </div>
          <div class="item form-group">
            <label for="kotaTujuan">Kota Tujuan</label>
            <div class="input-group mb-3">
              <select class="custom-select" name="kotaTujuan" id="kotaTujuan" onchange="bandaraTujuan()" required>
                <option value=" ">-Pilih Kota-</option>
                <option value="Juanda International Airports">Surabaya</option>
                <option value="Soekarna Hatta International Airports">Jakarta</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label for="bandaraTiba">Tiba Di Bandara</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="bandaraTiba" id="bandaraTiba" readonly>
              <script type="text/javascript">
                function bandaraTujuan() {
                  var data = document.getElementById("kotaTujuan").value;
                  document.getElementById("bandaraTiba").value = data;
                }
              </script>
            </div>
          </div>
          <div class="item form-group">
            <label for="maskapai">PIlih Maskapai</label>
            <div class="input-group mb-3">
              <select class="custom-select" name="maskapai" id="maskapai" required>
                <option value=" ">-Pilih Maskapai-</option>
                <option value="Citylink">Citylink</option>
                <option value="Lion Air">Lion Air</option>
                <option value="Garuda Indonesia">Garuda Indonesia</option>
                <option value="Adam Air">Adam Air</option>
              </select>
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
                <option value="300000">Economy Class</option>
                <option value="600000">Bussiness Class</option>
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