<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Rumah Sakit Rujukan</h1>
		</div>
		<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <a href="<?= base_url(); ?>rs_rujuk/create" class="btn btn-primary mb-3">Tambah Data RS</a>
                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-hover table-md">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width: 200px;">Nama RS Rujukan</th>
                                        <th style="width: 600px;">Alamat</th>
                                        <th style="width: 100px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($rs_rujuk as $item) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $item->nama_rs ?></td>
                                            <td><?= $item->alamat ?></td>
                                            <td class="pt-2" style="gap: 0.5rem;">
                                                <div class="pb-2">
                                                    <?= anchor('rs_rujuk/edit/'.$item->id, '<div data-toggle="tooltip"
															title="Edit" class="btn btn-warning"><i class="fas fa-pen"></i></div>') ?>
                                                </div>
                                                <div onclick="javascript: return confirm('Apakah Anda Yakin Ingin Hapus Data?')">
                                                    <?= anchor('rs_rujuk/destroy/'.$item->id, '<div data-toggle="tooltip"
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
