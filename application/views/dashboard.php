<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Dashboard</h1>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-primary">
						<i class="fas fa-user-doctor"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Jumlah Dokter</h4>
						</div>
						<div class="card-body">
							<?= $dokter; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-danger">
						<i class="fas fa-hospital-user"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Pasien Berobat</h4>
						</div>
						<div class="card-body">
							<?= $berobat; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-warning">
						<i class="fas fa-hospital"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>RS Rujukan</h4>
						</div>
						<div class="card-body">
							<?= $rs_rujuk; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-success">
						<i class="fas fa-tablets"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Obat Tersedia</h4>
						</div>
						<div class="card-body">
							<?= $obat; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-12 col-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Statistics</h4>
						<div class="card-header-action">
							<div class="btn-group">
								<a href="#" class="btn btn-primary">Week</a>
								<a href="#" class="btn">Month</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<canvas id="myChart" height="182"></canvas>
						<div class="statistic-details mt-sm-4">
							<div class="statistic-details-item">
								<span class="text-muted"><span class="text-primary"><i
											class="fas fa-caret-up"></i></span> 7%</span>
								<div class="detail-value">$243</div>
								<div class="detail-name">Today's Sales</div>
							</div>
							<div class="statistic-details-item">
								<span class="text-muted"><span class="text-danger"><i
											class="fas fa-caret-down"></i></span> 23%</span>
								<div class="detail-value">$2,902</div>
								<div class="detail-name">This Week's Sales</div>
							</div>
							<div class="statistic-details-item">
								<span class="text-muted"><span class="text-primary"><i
											class="fas fa-caret-up"></i></span>9%</span>
								<div class="detail-value">$12,821</div>
								<div class="detail-name">This Month's Sales</div>
							</div>
							<div class="statistic-details-item">
								<span class="text-muted"><span class="text-primary"><i
											class="fas fa-caret-up"></i></span> 19%</span>
								<div class="detail-value">$92,142</div>
								<div class="detail-name">This Year's Sales</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Histori Berobat</h4>
					</div>
					<div class="card-body">
						<ul class="list-unstyled list-unstyled-border">
							<?php foreach($data_pasien as $row):?>
							<li class="media">
								<img class="mr-3 rounded-circle" width="50"
									src="<?php echo base_url() ?>assets/img/avatar/avatar-1.png" alt="avatar">
								<div class="media-body">
									<div class="float-right text-primary"><?= $row->tgl_berobat; ?></div>
									<div class="media-title"><?= $row->nama_pasien; ?></div>
									<span class="text-small text-muted"><?= $row->keluhan; ?></span>
								</div>
							</li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
