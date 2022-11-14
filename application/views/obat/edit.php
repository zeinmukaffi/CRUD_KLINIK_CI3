<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Obat</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <?php foreach($obat as $item): ?>
                            <form action="<?php echo base_url().'obat/update'; ?>" method="POST">
                                <div class="form-group">
                                    <label>Nama Obat</label>
                                    <input type="hidden" name="id" id="id" value="<?php echo $item->id ?>">
                                    <input type="text" name="nama_obat" value="<?php echo $item->nama_obat ?>" 
                                    class="form-control">
                                </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Jenis</label>
                                        <select name="jenis" class="form-control">
                                            <option selected><?php echo $item->jenis ?></option>
                                            <option value="Tablet">Tablet</option>
                                            <option value="Pil">Pil</option>
                                            <option value="Sirup">Sirup</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label">Stok</label>
                                        <input type="number" name="stok" value="<?php echo $item->stok ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <a href="/klinik_ci3/obat" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>                        
                            <button type="submit" class="btn btn-primary" onclick="javascript: return confirm('Apakah Anda Yakin Ingin Edit Data?')">Simpan</button>
                        </form>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>