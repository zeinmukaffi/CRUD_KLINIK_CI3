<div class="main-content">
    <section class="section">
        <div class="section-header"><h1>Detail Data Obat</h1></div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <th>Nama Obat</th>
                                    <td>:</td>
                                    <td>
                                        <?= $obat->nama_obat; ?>
                                    </td>
                                    <th>Jenis Obat</th>
                                    <td>:</td>
                                    <td>
                                        <?= $obat->jenis; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Stok Obat</th>
                                    <td>:</td>
                                    <td>
                                        <?= $obat->stok; ?>
                                    </td>
                                    <th>Tanggal Kadaluwarsa</th>
                                    <td>:</td>
                                    <td>
                                        <?= $obat->tgl_exp; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Deskripsi Obat</th>
                                    <td>:</td>
                                    <td style="width: 300px;" class="py-1">
                                        <?= $obat->deskripsi; ?>
                                    </td>
                                    <th>Dosis Obat</th>
                                    <td>:</td>
                                    <td style="width: 300px;" class="py-1">
                                        <?= $obat->dosis; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Keterangan Obat</th>
                                    <td>:</td>
                                    <td style="width: 300px;" class="py-1">
                                        <?= $obat->ket; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex gap-2">
                            <a href="/klinik_ci3/obat" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
                            <div onclick="javascript: return confirm('Apakah Anda Yakin Ingin Hapus Data?')">
                                <?= anchor('obat/destroy/'.$obat->id, '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
                            </div>
                            <div>
                                <?= anchor('obat/edit/'.$obat->id, '<div class="btn btn-warning"><i class="fas fa-pen"></i></div>') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>