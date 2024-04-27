<div class="container">
    <div class="header-font">
        <h2>Tabel Mata Kuliah</h2>
        <hr>
    </div>
    <div class="block-head">
        <div class="block-btn">
            <a href="" class="btn btn-primary mb-2">Tambah MatKul</a>
        </div>
        <div class="block-search">
            <input type="text" placeholder="Search..." class="search-box"></input>
            <button class="search-btn">Search</button>
        </div>
    </div>
    <table class="table table-bordered">
        <thead class="" style="text-align:center">
            <tr>
                <th>No</th>
                <th>Kode MTK</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Dosen</th>
                <th>Jawdal</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody style="text-align:center">
        <?php foreach ($mtk as $a): ?>
            <tr>
                <td><?= $a['id']; ?></td>
                <td><?= $a['kode_mtk']; ?></td>
                <td><?= $a['nama_mtk']; ?></td>
                <td><?= $a['sks']; ?></td>
                <td><?= $a['dosen']; ?></td>
                <td><?= $a['kelas']; ?></td>
                <td><?= $a['jadwal']; ?></td>
                <td>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalEdit">Ubah</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete" data-id="<?= $a['id'] ?>">Hapus</button>
                </td>
                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
    <a href="<?= base_url('Home/index'); ?>" class="btn btn-warning mb-2">Kembali</a>


    <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data</h5>
                </div>
                <div class="modal-body">
                    <form id="editForm" action="<?= base_url('Home/update'); ?>">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <label for="kodeMtk">Kode Mata Kuliah:</label>
                            <input type="text" class="form-control" id="kodeMtk" name="kode_mtk">
                        </div>
                        <div class="form-group">
                            <label for="namaMtk">Nama Mata Kuliah:</label>
                            <input type="text" class="form-control" id="namaMtk" name="nama_mtk">
                        </div>
                        <div class="form-group">
                            <label for="sks">SKS:</label>
                            <input type="text" class="form-control" id="sks" name="sks">
                        </div>
                        <div class="form-group">
                            <label for="dosen">Dosen:</label>
                            <input type="text" class="form-control" id="dosen" name="dosen">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas:</label>
                            <input type="text" class="form-control" id="kelas" name="kelas">
                        </div>
                        <div class="form-group">
                            <label for="jadwal">Jadwal:</label>
                            <input type="date" class="form-control" id="jadwal" name="jadwal">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Hapus -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Apakah Anda Yakin ?</h5>
            </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                    <form id="deleteForm" action="<?= base_url('Home/hapus'); ?>">
                        <input type="hidden" id="deleteId" name="id">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>                  
    </div>
</div>