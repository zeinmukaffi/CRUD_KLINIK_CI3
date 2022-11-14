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
                            <form action="<?php echo base_url().'dokter/update'; ?>" method="POST">
                                <div class="form-group">
                                    <label>Nama Dokter</label>
                                    <input type="hidden" name="id" id="id" value="<?php echo $item->id ?>">
                                    <input type="text" name="nama_dokter" value="<?php echo $item->nama_dokter ?>" 
                                    class="form-control">
                                </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">NIP (Nomor Induk Pegawai)</label>
                                        <input type="number" name="nip" value="<?php echo $item->nip ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">SIP (Surat Izin Praktek)</label>
                                        <input type="number" name="sip" value="<?php echo $item->sip ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="javascript: return confirm('Apakah Anda Yakin Ingin Edit Data?')">Simpan</button>
                            <a href="/klinik_ci3/dokter" class="btn btn-secondary"><i class="fa-solid fa-circle-arrow-left"></i> Back</a>                        </form>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>