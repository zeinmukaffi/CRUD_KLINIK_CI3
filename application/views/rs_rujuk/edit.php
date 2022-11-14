<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data RS Rujukan</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <?php foreach($rs_rujuk as $item): ?>
                            <form action="<?php echo base_url().'rs_rujuk/update' ?>" method="POST">
                                <div class="form-group">
                                    <label class="form-label">Nama RS Rrjukan</label>
                                    <input type="hidden" name="id" id="id" value="<?= $item->id; ?>">
                                    <input type="text" name="nama_rs" value="<?= $item->nama_rs; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control"><?= $item->alamat; ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" onclick="javascript: return confirm('Apakah Anda Yakin Ingin Edit Data?')">Simpan</button>
                                <a href="/klinik_ci3/rs_rujuk" class="btn btn-secondary">Back</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>