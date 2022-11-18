<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Pasien</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <?php foreach($pasien as $item): ?>
                        <form action="<?= base_url().'pasien/update' ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Pasien</label>
                                <input type="hidden" name="id" id="id" value="<?= $item->id; ?>">
                                <input type="text" name="nama_pasien" class="form-control" value="<?= $item->nama_pasien; ?>" 
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" rows="3" name="alamat"><?= $item->alamat; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group mb-2">
                                        <label class="form-label ">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" value="<?= $item->tgl_lahir; ?>" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">Jenis Kelamin</label>
                                                <select name="jk" class="form-control">
                                                    <option selected><?= $item->jk; ?></option>
                                                    <option value="1">Laki Laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">No Telepon</label>
                                            <input type="number" name="no_telp" value="<?= $item->no_telp; ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/klinik_ci3/pasien" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                     
                            <button type="submit" class="btn btn-primary" onclick="javascript: return confirm('Apakah Anda Yakin Ingin Edit Data?')">Simpan</button>
                        </form>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>