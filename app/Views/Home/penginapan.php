<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Penginapan</h1>
    </div>
  </section>
  <div class="row">
    <div class="col d-flex">
      <form action="" method="post" class="form-inline">
        <div class="form-group mr-1">
          <input type="text" class="form-control" size="30" name="keyword" placeholder="Kota, Hotel Tujuan Anda . ." autocomplete="off">
          <button type="submit" class="btn btn-primary" name="cari"><span class="fas fa-search" aria-hidden="true"></span></button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col d-flex">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-md">
            <tr>
              <th></th>
              <th>Nama Hotel</th>
              <th>Alamat Hotel</th>
              <th>Action</th>
            </tr>
            <?php foreach ($penginapan as $p) : ?>
              <tr>
                <td><img src="<?= base_url(); ?>/img/<?= $p['gambarHotel']; ?>" alt="logo" class="gambarHotel"></td>
                <td><?= $p['namaHotel']; ?></td>
                <td><?= $p['alamatHotel']; ?></td>
                <td>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#PesanHotel<?= $p['id']; ?>">
                    Pesan Sekarang !
                  </button>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
          <div class="card-footer text-bottom">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- <h2>Order Simaksi!</h2> -->

</div>

<!-- Modal -->
<?php
foreach ($penginapan as $p) : ?>
  <div class="modal fade" id="PesanHotel<?= $p['id']; ?>">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Pesan Penginapan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('Home/save'); ?>" method="post">
            <div class="item form-group">
              <label for="namaHotel">Nama Hotel</label>
              <div class="item form-group">
                <input type="text" class="form-control" name="namaHotel" id="namaHotel" value="<?= $p['namaHotel']; ?>" readonly>
              </div>
            </div>
            <div class="item form-group">
              <label for="in">Tanggal Masuk</label>
              <div class="item form-group">
                <input type="date" class="form-control" name="in" id="in" value="" required>
              </div>
            </div>
            <div class="item form-group">
              <label for="out">Tanggal Keluar</label>
              <div class="item form-group">
                <input type="date" class="form-control" name="out" id="out" value="" required>
              </div>
            </div>
            <div class="input-group mb-3">
              <select class="custom-select" name="tipeKamar" id="tipeKamar" onchange="hargaKamar()" required>
                <option value="0">Tipe Kamar</option>
                <option value="200000">Suites Room - 2 Orang - RP.200.000</option>
                <option value="400000">Deluxe Room - 2 Orang - Rp.400.000</option>
              </select>
            </div>
            <div class="item form-group">
              <label for="harga">Total Harga</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">RP.</span>
                </div>
                <input type="text" class="form-control" name="harga" id="harga" readonly>
                <script type="text/javascript">
                  function hargaKamar() {
                    var data = document.getElementById("tipeKamar").value;
                    document.getElementById("harga").value = data;
                  }
                </script>
                <div class="input-group-append">
                  <span class="input-group-text">.00</span>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>