<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Create Dokter</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <?= form_open_multipart('dokter/store'); ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Nama Dokter</label>
                                        <input type="text" required name="nama_dokter" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select name="jk" class="form-select">
                                            <option>-----</option>
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">NIP (Nomor Induk Pegawai)</label>
                                        <input type="number" required name="nip" class="form-control">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">SIP (Surat Izin Praktek)</label>
                                        <input type="number" name="sip" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="form-label">Tarif Per Pasien</label>
                                        <input type="number" name="tarif" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Kualifikasi</label>
                                        <input type="text" required name="kualifikasi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Foto Dokter</label>
                                        <input type="file" name="foto" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <a href="/klinik_ci3/dokter" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                        
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>