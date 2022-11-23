<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Obat</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <?php foreach($obat as $item): ?>
                            <form action="<?= base_url().'obat/update' ?>" method="POST">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Nama Obat</label>
                                        <input type="text" value="<?= $item->nama_obat?>" name="nama_obat" class="form-control">
                                        <input type="hidden" value="<?= $item->id?>" name="id" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Harga Obat</label>
                                        <input type="number" value="<?= $item->harga?>" name="harga" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-label">Jenis Obat</label>
                                        <select name="jenis" class="form-select">
                                            <option selected><?= $item->jenis?></option>
                                            <option value="Tablet">Tablet</option>
                                            <option value="Sirup">Sirup</option>
                                            <option value="Kapsul">Kapsul</option>
                                            <option value="Gel">Gel</option>
                                            <option value="Obat Tetes">Obat Tetes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-label">Stok</label>
                                        <input type="number" value="<?= $item->stok?>" name="stok" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">Tanggal Kadaluwarsa</label>
                                        <input value="<?= $item->tgl_exp?>" type="date" name="tgl_exp" class="form-control">
                                        <label class="form-label mt-4">Keterangan</label>
                                        <select name="ket" class="form-select">
                                            <option selected><?= $item->ket?></option>
                                            <option value="Sesudah Makan">Sesudah Makan</option>
                                            <option value="Sebelum Makan">Sebelum Makan</option>
                                            <option value="Obat Luar">Obat Luar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control"><?= $item->deskripsi?></textarea>
                                    </div>
                                </div>
                                <div class="col-4">
                                <div class="form-group">
                                        <label class="form-label">Dosis</label>
                                        <textarea name="dosis" class="form-control"><?= $item->dosis?></textarea>
                                    </div>
                                </div>
                            </div>
                            <a href="/klinik_ci3/obat" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>