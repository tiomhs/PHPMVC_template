<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah data Mahasiswa
            </button>
            <br><br>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary rounded-pill">detail</a>
                        </li>    
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="masukkan nama anda" name="nama">
        </div>
        <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" placeholder="masukkan nrp anda" name="nrp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" placeholder="masukkan email anda" name="email">
        </div>
        <label for="jurusan">Jurusan</label>
        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Planologi">Teknik Planologi</option>
            <option value="Teknik lingkungan">Teknik lingkungan</option>
        </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
        </form>
    </div>
  </div>
</div>