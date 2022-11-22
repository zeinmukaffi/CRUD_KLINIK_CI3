<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Dokter</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <?php foreach($dokter as $item): ?>
                            <?= form_open_multipart('dokter/update'); ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Nama Dokter</label>
                                        <input type="text" value="<?= $item->nama_dokter ?>" name="nama_dokter" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select name="jk" class="form-select">
                                            <option><?= $item->jk ?></option>
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">NIP (Nomor Induk Pegawai)</label>
                                        <input type="number" value="<?= $item->nip ?>" name="nip" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">SIP (Surat Izin Praktek)</label>
                                        <input type="number" name="sip" value="<?= $item->sip ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Kualifikasi</label>
                                        <input type="text" value="<?= $item->kualifikasi ?>" name="kualifikasi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Foto Dokter</label>
                                        <div class="row">
                                            <div class="col-9">
                                                <input type="hidden" name="id" value="<?= $item->id ?>">
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <img src="<?= base_url(); ?>assets/foto/<?= $item->foto ?>" style="width: 100px; float: right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/klinik_ci3/dokter" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                        
                            <button type="submit" class="btn btn-primary" onclick="javascript: return confirm('Apakah Anda Yakin Ingin Edit Data?')">Simpan</button>
                        <?= form_close(); ?>                        
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>