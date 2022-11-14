<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data Berobat Pasien</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <form action="<?php echo base_url().'berobat/store' ?>" method="POST">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Nama Pasien</label>
                                        <select required name="nama_pasien_id" class="form-select">
                                            <option selected ></option>
                                            <?php foreach($pasien as $p): ?>
                                                <option value="<?= $p->id ?>"><?= $p->nama_pasien; ?></option>
                                            <?php endforeach ;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Nama Dokter</label>
                                    <select required name="nama_dokter_id" class="form-select">
                                        <option selected value=""></option>
                                        <?php foreach($dokter as $d): ?>
                                            <option value="<?= $d->id ?>"><?= $d->nama_dokter; ?></option>
                                        <?php endforeach ;?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Keluhan</label>
                                        <textarea required class="form-control" rows="3" name="keluhan""></textarea> 
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">RS Rujukan</label>
                                                <select name="rujukan_id" class="form-select">
                                                        <option></option>
                                                        <?php foreach($rs_rujuk as $r): ?>
                                                            <option value="<?= $r->id ?>"><?= $r->nama_rs ?></option>
                                                        <?php endforeach ;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">Obat</label>
                                                <select name="obat_id" class="form-select">
                                                        <option></option>
                                                        <?php foreach($obat as $o): ?>
                                                            <option value="<?= $o->id ?>"><?= $o->nama_obat ?></option>
                                                        <?php endforeach ;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                    <label class="form-label">Tanggal Berobat</label>
                                                    <input required type="date" class="form-control" name="tgl_berobat">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="form-label">Biaya Berobat</label>
                                                    <input required type="number" name="biaya" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/klinik_ci3/berobat" class="btn btn-secondary"><i class="fa-solid fa-circle-arrow-left"></i> Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>