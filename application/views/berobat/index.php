d<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Berobat Pasien</h1>
		</div>
		<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <a href="berobat/create" class="btn btn-primary mb-3">Tambah Data</a>
                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-hover table-md table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pasien</th>
                                        <th>Tanggal Berobat</th>
                                        <!-- <th>Keluhan</th> -->
                                        <th>Nama Dokter</th>
                                        <!-- <th>RS Rujukan</th> -->
                                        <!-- <th>Obat</th> -->
                                        <!-- <th>Biaya</th> -->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($berobat as $item) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $item->nama_pasien ?></td>
                                            <td><?= $item->tgl_berobat ?></td>
                                            <!-- <td><?= $item->keluhan ?></td> -->
                                            <td><?= $item->nama_dokter ?></td>
                                            <!-- <td><?= $item->nama_rs ?></td> -->
                                            <!-- <td><?= $item->nama_obat ?></td> -->
                                            <!-- <td><?= $item->biaya ?></td> -->
                                            <td class="d-flex" style="gap: 0.5rem;">
                                                <div>
                                                    <?php echo anchor('berobat/edit/'.$item->id, '<div      data-toggle="tooltip" title="Edit" class="btn btn-warning">
                                                    <i class="fas fa-pen"></i></div>') ?>
                                                </div>
                                                <div>
                                                    <?php echo anchor('berobat/detail/'.$item->id, '<div data-toggle="tooltip" title="Details" class="btn btn-info"><i class="fas fa-eye"></i></div>')?>
                                                </div>
                                                <div onclick="javascript: return confirm('Apakah Anda Yakin Ingin Hapus Data?')">
                                                    <?php echo anchor('berobat/destroy/'.$item->id, '<div data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
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
