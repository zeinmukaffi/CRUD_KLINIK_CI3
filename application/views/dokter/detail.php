<div class="main-content">
    <section class="section">
        <div class="section-header"><h1>Detail Data Dokter</h1></div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p0">
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <th>Nama Dokter</th>
                                    <td>:</td>
                                    <td>
                                        <?= $dokter->nama_dokter; ?>
                                    </td>
                                    <th>Jenis Kelamin</th>
                                    <td>:</td>
                                    <td>
                                        <?= $dokter->jk; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nomor Induk Pegawai</th>
                                    <td>:</td>
                                    <td>
                                        <?= $dokter->nip; ?>
                                    </td>
                                    <th>Nomor SIP (Surat Izin Praktik)</th>
                                    <td>:</td>
                                    <td>
                                        <?= $dokter->sip; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kualifikasi Dokter</th>
                                    <td>:</td>
                                    <td>
                                        <?= $dokter->kualifikasi; ?>
                                    </td>
                                    <th>Foto Dokter</th>
                                    <td>:</td>
                                    <td class="p-2">
                                        <img src="<?= base_url(); ?>assets/foto/<?= $dokter->foto ?>" style="width: 100px;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex gap-2">
                            <a href="/klinik_ci3/dokter" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
                            <div onclick="javascript: return confirm('Apakah Anda Yakin Ingin Hapus Data?')">
                                <?= anchor('dokter/destroy/'.$dokter->id, '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
                            </div>
                            <div>
                                <?= anchor('dokter/edit/'.$dokter->id, '<div class="btn btn-warning"><i class="fas fa-pen"></i></div>') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>