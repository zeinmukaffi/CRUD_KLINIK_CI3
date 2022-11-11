d<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Pasien</h1>
		</div>
		<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <a href="create" class="btn btn-primary mb-3">Tambah Data</a>
                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-hover table-md table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pasien</th>
                                        <!-- <th>Alamat</th> -->
                                        <th>Jenis Kelamin</th>
                                        <!-- <th>No Telepon</th> -->
                                        <th>Tanggal Lahir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($pasien as $item) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $item->nama_pasien ?></td>
                                            <!-- <td><?= $item->alamat ?></td> -->
                                            <td><?= $item->jk ?></td>
                                            <!-- <td><?= $item->no_telp ?></td> -->
                                            <td><?= $item->tgl_lahir ?></td>
                                            <td class="d-flex" style="gap: 0.5rem;">
                                                <div>
                                                    <?php echo anchor('pasien/edit/'.$item->id, '<div class="btn btn-warning"><i class="fas fa-pen"></i></div>') ?>
                                                </div>
                                                <div>
                                                    <?php echo anchor('pasien/detail/'.$item->id, '<div class="btn btn-info"><i class="fas fa-eye"></i></div>')?>
                                                </div>
                                                <div onclick="javascript: return confirm('Apakah Anda Yakin Ingin Hapus Data?')">
                                                    <?php echo anchor('pasien/destroy/'.$item->id, '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
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
