<?= $this->extend('penyedia\components\header-footer') ?>
<?= $this->section('content') ?>
<div class="body-container">
    <div class="content-container">
        <div class="header-container">
            <h2>Tambah Barang</h2>
        </div>
        <div class="add-foods-container">
            <div class="add-content-container">
                <table>
                    <tbody>
                        <form action="<?= base_url('penyedia/tambahBarang') ?>" method="post"
                            enctype="multipart/form-data">
                            <tr>
                                <td>Masukkan nama barang</td>
                                <td>:</td>
                                <td><input name="nmbarang" type="text"></td>
                            </tr>
                            <tr>
                                <td>Masukkan stok barang</td>
                                <td>:</td>
                                <td><input name="stok" type="text"></td>
                            </tr>
                            <tr>
                                <td>Masukkan harga barang</td>
                                <td>:</td>
                                <td><input name="harga" type="text"></td>
                            </tr>
                            <tr>
                                <td>Masukkan gambar barang</td>
                                <td>:</td>
                                <td><input name="gambar" type="file"></td>
                            </tr>
                            <tr>
                                <td>Masukkan kategori barang</td>
                                <td>:</td>
                                <td><select type="text" name="kategori">
                                        <option value="">Makanan</option>
                                        <option value="">Minuman</option>
                                        <option value="">Barang</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button type="submit">Tambahkan</button></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>