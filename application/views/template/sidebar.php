<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="<?= base_url(); ?>">Klinik Bahagia</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="<?= base_url(); ?>">KB</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="<?php if($this->uri->segment(1) == ''){echo "active" ;}?>">
				<a href="<?= base_url(); ?>" class="nav-link"><i class="fas fa-heartbeat"></i><span>Dashboard Klinik</span></a>
			</li>
			<li class="menu-header">Data Menu</li>
			<li class="<?php if($this->uri->segment(1) == 'berobat'){echo "active" ;}?>">
				<a class="nav-link" href="<?= base_url(); ?>berobat" ><i class="fas fa-procedures"></i> <span>Berobat</span></a>
			</li>
			<li class="<?php if($this->uri->segment(1) == 'dokter'){echo "active" ;}?>">
				<a class="nav-link" href="<?= base_url(); ?>dokter" ><i class="fas fa-user-doctor"></i> <span>Dokter</span></a>
			</li>
			<li class="<?php if($this->uri->segment(1) == 'pasien'){echo "active" ;}?>">
				<a class="nav-link" href="<?= base_url(); ?>pasien"><i class="fas fa-hospital-user"></i> <span>Pasien</span></a>
			</li>
			<li class="<?php if($this->uri->segment(1) == 'obat'){echo "active" ;}?>">
				<a class="nav-link" href="<?= base_url(); ?>obat"><i class="fas fa-tablets"></i><span>Obat</span></a>
			</li>
			<li class="<?php if($this->uri->segment(1) == 'rs_rujuk'){echo "active" ;}?>">
				<a class="nav-link" href="<?= base_url(); ?>rs_rujuk"><i class="fas fa-hospital"></i><span>Rumah Sakit</span></a>
			</li>
		</ul>
	</aside>
</div>