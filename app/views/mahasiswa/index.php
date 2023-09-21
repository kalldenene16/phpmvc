<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Siswa
      </button>
    </div>
  </div>

            <br><br>
            <h3>Daftar Mahasiswa</h3>
                    <ul class="list-group">
                        <?php foreach($data['mhs'] as $mhs ) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge rounded-pill bg-secondary">detail</a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
        </div>
    </div>
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


