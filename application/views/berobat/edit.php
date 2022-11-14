<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Berobat Pasien</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <form action="<?php echo site_url('berobat/update/'.$berobat->id) ?>" method="POST">
                        <input type="hidden" name="id" id="id" value="<?= $berobat->id ?>">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nama Pasien</label>
                                        <select name="nama_pasien_id" class="form-select">
                                            <?php foreach($pasien as $p): ?>
                                                <option value="<?= $p->id ?>" <?php if($p->id == $berobat->nama_pasien_id) echo "selected"; ?>><?= $p->nama_pasien ?></option>
                                            <?php endforeach ;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>Nama Dokter</label>
                                    <select name="nama_dokter_id" class="form-select">
                                        <?php foreach($dokter as $d): ?>
                                            <option value="<?= $d->id ?>" <?php if($d->id == $berobat->nama_dokter_id) echo "selected"; ?>><?= $d->nama_dokter ?></option>
                                        <?php endforeach ;?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Keluhan</label>
                                        <textarea class="form-control" rows="3" name="keluhan"><?= $berobat->keluhan; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">RS Rujukan</label>
                                                <?php if($berobat->rujukan_id == null): ?>
                                                    <select name="rujukan_id" class="form-select">
                                                        <option>-</option>
                                                        <?php foreach($rs_rujuk as $rs): ?>
                                                            <option value="<?= $rs->id ?>" <?php if($rs->id == $berobat->rujukan_id) echo "selected"; ?>><?= $rs->nama_rs ?></option>
                                                        <?php endforeach ;?>
                                                    </select>
                                                <?php else: ?>
                                                    <select name="rujukan_id" class="form-select">
                                                        <?php foreach($rs_rujuk as $rs): ?>
                                                            <option value="<?= $rs->id ?>" <?php if($rs->id == $berobat->rujukan_id) echo "selected"; ?>><?= $rs->nama_rs ?></option>
                                                        <?php endforeach ;?>
                                                        <option>-</option>
                                                    </select>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">Obat</label>
                                                <?php if($berobat->obat_id == null): ?>
                                                    <select name="obat_id" class="form-select">
                                                        <option>-</option>
                                                        <?php foreach($obat as $o): ?>
                                                            <option value="<?= $o->id ?>" <?php if($o->id == $berobat->obat_id) echo "selected"; ?>><?= $o->nama_obat ?></option>
                                                        <?php endforeach ;?>
                                                    </select>
                                                <?php else: ?>
                                                    <select name="obat_id" class="form-select">
                                                        <?php foreach($obat as $o): ?>
                                                            <option value="<?= $o->id ?>" <?php if($o->id == $berobat->obat_id) echo "selected"; ?>><?= $o->nama_obat ?></option>
                                                        <?php endforeach ;?>
                                                            <option>-</option>
                                                    </select>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">Tanggal Berobat</label>
                                                <input type="date" value="<?= $berobat->tgl_berobat; ?>" class="form-control" name="tgl_berobat">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">Biaya Berobat</label>
                                                <input type="number" name="biaya" value="<?= $berobat->biaya; ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/klinik_ci3/berobat" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>