<div class="main-content">
    <section class="section">
        <div class="section-header">Detail Data Berobat Pasien</div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <th>Nama Pasien</th>
                                    <td>:</td>
                                    <td>
                                        <?= $pasien->nama_pasien; ?>
                                    </td>
                                    <th>Tanggal Lahir</th>
                                    <td>:</td>
                                    <td>
                                        <?= $pasien->tgl_lahir; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>:</td>
                                    <td>
                                        <?= $pasien->jk; ?>
                                    </td>
                                    <th>No Telepon</th>
                                    <td>:</td>
                                    <td>
                                        <?= $pasien->no_telp; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Alamat Lengkap</th>
                                    <td>:</td>
                                    <td style="width: 300px;" class="py-1">
                                        <?= $pasien->alamat; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex gap-2">
                            <a href="/klinik_ci3/pasien" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
                            <div onclick="javascript: return confirm('Apakah Anda Yakin Ingin Hapus Data?')">
                                <?php echo anchor('pasien/destroy/'.$pasien->id, '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
                            </div>
                            <div>
                                <?php echo anchor('pasien/edit/'.$pasien->id, '<div class="btn btn-warning"><i class="fas fa-pen"></i></div>') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>