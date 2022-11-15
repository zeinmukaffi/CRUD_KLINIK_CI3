d<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Dokter</h1>
		</div>
		<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <a href="<?= base_url(); ?>dokter/create" class="btn btn-primary mb-3">Tambah Data</a>
                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-hover table-md">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Dokter</th>
                                        <th>NIP</th>
                                        <th>SIP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($dokter as $item) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $item->nama_dokter ?></td>
                                            <td><?= $item->nip ?></td>
                                            <td><?= $item->sip ?></td>
                                            <td class="d-flex" style="gap: 0.5rem;">
                                                <div>
                                                    <?= anchor('dokter/edit/'.$item->id, '<div data-toggle="tooltip"
															title="Edit" class="btn btn-warning"><i class="fas fa-pen"></i></div>') ?>
                                                </div>
                                                <div onclick="javascript: return confirm('Apakah Anda Yakin Ingin Hapus Data?')">
                                                    <?= anchor('dokter/destroy/'.$item->id, '<div data-toggle="tooltip"
															title="Delete" class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>
</div>
