<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input Data Pasien</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <form action="<?= base_url().'pasien/store' ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Pasien</label>
                                <input type="text" required name="nama_pasien" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" rows="3" name="alamat""></textarea>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" required class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">Jenis Kelamin</label>
                                                <select name="jk" class="form-select">
                                                    <option selected disabled>----</option>
                                                    <option value="1">Laki Laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">No Telepon</label>
                                            <input type="number" name="no_telp" class="form-control">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/klinik_ci3/pasien" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                      
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>