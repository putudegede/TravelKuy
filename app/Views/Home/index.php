<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
  </section>
  <div>
    <a href="/bus" class="btn btn-primary mb-3">Order Tiket Bus!</a>
    <a href="/kapal" class="btn btn-primary mb-3">Order Tiket Kapal</a>
    <a href="/kereta" class="btn btn-primary mb-3">Order Tiket Kereta!</a>
    <a href="/penginapan" class="btn btn-primary mb-3">Order Penginapan!</a>
    <a href="/pesawat" class="btn btn-primary mb-3">Order Tiket Pesawat!</a>
    <a href="/simaksi" class="btn btn-primary mb-3">Order SIMAKSI!</a>
  </div>
  <?php if (!empty(session()->getFlashdata('message'))) : ?>
    <div class="alert alert-primary alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        <?= session()->getFlashdata('message') ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if (!empty(session()->getFlashdata('delete'))) : ?>
    <div class="alert alert-danger alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        <?= session()->getFlashdata('delete') ?>
      </div>
    </div>
  <?php endif; ?>
  <div class="row">
    <div class="col d-flex">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-md">
            <tr>
              <th>Pemesanan</th>
              <th>Tanggal</th>
              <th>Harga</th>
            </tr>
            <?php foreach ($history as $h) : ?>
              <tr>
                <td><?= $h['jenis']; ?></td>
                <td><?= $h['masuk']; ?></td>
                <td><?= $h['harga']; ?></td>
                <td>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#invoicePesan<?= $h['id']; ?>" data-bs-id="invoicePesan">
                    Invoice
                  </button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updatePesan<?= $h['id']; ?>" data-bs-id="updatePesan">
                    Reschedule
                  </button>
                  <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#batalkan<?= $h['id']; ?>" data-bs-id="batalkan">
                    Cancel
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
</div>
<!-- Modal -->
<!-- Reschedule -->
<?php $no = 0;
foreach ($history as $h) : $no++; ?>
  <div class="modal fade" id="updatePesan<?= $h['id']; ?>">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ubah Pemesanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('Home/update/' . $h['id']); ?>" method="post">
            <div class="item form-group">
              <label for="namaHotel">Jenis Pemesanan</label>
              <div class="item form-group">
                <input type="text" name="namaHotel" class="form-control" id="namaHotel" required value="<?= $h['jenis']; ?>" readonly>
              </div>
            </div>
            <div class="item form-group">
              <label for="in">Tanggal</label>
              <div class="item form-group">
                <input type="date" class="form-control" name="in" id="in" value="<?= $h['masuk'] ?>" required>
              </div>
            </div>
            <div class="item form-group">
              <label for="out">Harga</label>
              <div class="item form-group">
                <input type="text" class="form-control" name="harga" id="harga" value="<?= $h['harga'] ?>" required readonly>
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
  <div class="modal fade" id="batalkan<?= $h['id']; ?>">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Batalkan Pemesanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('Home/delete/' . $h['id']); ?>" method="post">
            <h7>Yakin Ingin Membatalkan Pesanan ?</h7>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Kembali</button>
              <button type="submit" class="btn btn-danger">Batalkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- invoice -->
  <div class="modal fade" id="invoicePesan<?= $h['id']; ?>">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Invoice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('Home/invoice/' . $h['id']); ?>" method="post">
            <div class="item form-group">
              <label for="namaHotel">Jenis Pemesanan</label>
              <div class="item form-group">
                <input type="text" name="namaHotel" class="form-control" id="namaHotel" required value="<?= $h['jenis']; ?>" readonly>
              </div>
            </div>
            <div class="item form-group">
              <label for="in">Tanggal</label>
              <div class="item form-group">
                <input type="date" class="form-control" name="in" id="in" value="<?= $h['masuk'] ?>" readonly>
              </div>
            </div>
            <div class="item form-group">
              <label for="out">Harga</label>
              <div class="item form-group">
                <input type="text" class="form-control" name="harga" id="harga" value="<?= $h['harga'] ?>" readonly>
              </div>
            </div>
            <h6>Pembayaran via transfer : </h6>
            <h7>Rekening Bank Crud : 12367867645</h7>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>