<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data RS Rujukan</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <form action="<?= base_url().'rs_rujuk/store' ?>" method="POST">
                            <div class="form-group">
                                <label class="form-label">Nama RS Rrjukan</label>
                                <input type="text" name="nama_rs" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control"></textarea>
                            </div>
                            <a href="/klinik_ci3/rs_rujuk" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                        
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>