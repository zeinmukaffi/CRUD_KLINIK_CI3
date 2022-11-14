<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data Obat</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <form action="<?php echo base_url().'obat/store' ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Obat</label>
                                <input type="text" required name="nama_obat" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Jenis Obat</label>
                                        <select name="jenis" class="form-control">
                                            <option selected disabled>-----</option>
                                            <option value="Tablet">Tablet</option>
                                            <option value="Sirup">Sirup</option>
                                            <option value="Kapsul">Kapsul</option>
                                            <option value="Salep">Salep</option>
                                            <option value="Obat Tetes">Obat Tetes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Stok</label>
                                        <input type="number" name="stok" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/klinik_ci3/obat" class="btn btn-secondary"><i class="fa-solid fa-circle-arrow-left"></i> Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>