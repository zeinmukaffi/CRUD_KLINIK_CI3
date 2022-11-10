<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data RS Rujukan</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <form action="<?php echo base_url().'rs_rujuk/store' ?>" method="POST">
                            <div class="form-group">
                                <label class="form-label">Nama RS Rrjukan</label>
                                <input type="text" name="nama_rs" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/klinik_ci3/rs_rujuk/index" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>