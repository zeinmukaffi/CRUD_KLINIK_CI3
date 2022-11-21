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
                            <form action="<?= base_url().'dokter/update'; ?>" method="POST">
                                <div class="form-group">
                                    <label>Nama Dokter</label>
                                    <input type="hidden" name="id" id="id" value="<?= $item->id ?>">
                                    <input type="text" name="nama_dokter" value="<?= $item->nama_dokter ?>" 
                                    class="form-control">
                                </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">NIP (Nomor Induk Pegawai)</label>
                                        <input type="number" name="nip" value="<?= $item->nip ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">SIP (Surat Izin Praktek)</label>
                                        <input type="number" name="sip" value="<?= $item->sip ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <a href="/klinik_ci3/dokter" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                        
                        <?php endforeach;?>
                            <button type="submit" class="btn btn-primary" onclick="javascript: return confirm('Apakah Anda Yakin Ingin Edit Data?')">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>