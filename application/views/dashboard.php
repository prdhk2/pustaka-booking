<!-- start content -->
<div class="main-content">
<!-- Halaman Utama -->
    <h2 style="text-align:center">Form Input Matakuliah</h2>
    <hr style="max-width:50%; margin:auto; margin-bottom:2rem;">
    <div class ="form-container">
        <form method="POST" action="<?= base_url('Home/hasil'); ?>">
            <table>
                <tr>
                    <td>
                        <h5>Kode Mata Kuliah</h5>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="number" name="kode_mtk" placeholder="Masukkan Kode Mata Kuliah" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Nama Mata Kuliah</h5>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="nama_mtk" placeholder="Masukkan Nama Mata Kuliah" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Masukkan SKS</h5>
                    </td>
                    <td>
                        :
                    </td>
                    <td style="text-align:left;">
                        <select name="sks" required>
                            <?php foreach ($mtk as $a): ?>
                                <option value="<?= $a['sks']; ?>" name="sks"><?= $a['sks']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   </div>
</div>
<!-- end content -->

