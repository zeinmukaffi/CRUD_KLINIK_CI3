<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Create Dokter</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <form action="<?= base_url().'dokter/store' ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Dokter</label>
                                <input type="text" required name="nama_dokter" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">NIP (Nomor Induk Pegawai)</label>
                                        <input type="number" required name="nip" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">SIP (Surat Izin Praktek)</label>
                                        <input type="number" name="sip" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <a href="/klinik_ci3/dokter" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                        
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>