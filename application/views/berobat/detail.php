<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Detail Data Berobat Pasien</h1>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body p0">
						<div class="table-responsive">
							<table class="table table-stripped">
								<tbody>
									<tr>
										<th>Nama Pasien</th>
										<td>:</td>
										<td>
											<?php foreach($pasien as $p):
                                                if($p->id == $berobat->nama_pasien_id):
                                                    echo $p->nama_pasien; 
                                                endif;
                                            endforeach;?>
										</td>
										<th>Keluhan Pasien</th>
										<td>:</td>
										<td style="width: 300px;" class="pb-2"><?= $berobat->keluhan; ?></td>
									</tr>
									<tr>
										<th>Nama Dokter</th>
										<td>:</td>
										<td>
											<?php 
                                                foreach($dokter as $d):
                                                    if($d->id == $berobat->nama_dokter_id):
                                                        echo $d->nama_dokter; 
                                                    endif;
                                                endforeach;
                                            ?>
										<th>Obat Yang Di Perlukan</th>
										<td>:</td>
										<td>
											<?php 
                                                if ($berobat->obat_id === null) {
                                                    echo "-";
                                                }else{
                                                    foreach($obat as $o):
                                                        if($o->id == $berobat->obat_id):
                                                            echo $o->nama_obat;
                                                        endif;
                                                    endforeach;
                                                }
                                            ?>
										</td>
									</tr>
									<tr>
										<th>Tanggal Berobat</th>
										<td>:</td>
										<td>
											<?= $berobat->tgl_berobat; ?>
										</td>
										<th>Tujuan RS Rujukan</th>
										<td>:</td>
										<td>
											<?php 
                                                if ($berobat->rujukan_id === null) {
                                                    echo "-";
                                                }else{
                                                    foreach($rs_rujuk as $r):
                                                        if($r->id == $berobat->rujukan_id):
                                                            echo $r->nama_rs;
                                                        endif;
                                                    endforeach;
                                                }
                                            ?>
										</td>
									</tr>
									<tr>
										<th>
											Biaya Berobat
											<br>
											<button data-bs-toggle="modal" data-bs-target="#exampleModal"
												class="btn p-0" style="text-decoration: underline;">Lihat Rincian
												Biaya</button>
										</th>
										<td>:</td>
										<td>
											<?php
                                                if($berobat->obat_id === null){
                                                    $harga = 0;
                                                }else{
                                                    foreach($obat as $hrg):
                                                        if($hrg->id == $berobat->obat_id):
                                                            $harga = $hrg->harga;
                                                        endif;
                                                    endforeach;
                                                }

                                                foreach($dokter as $trf):
                                                    if($trf->id == $berobat->nama_dokter_id):
                                                        $tarif = $trf->tarif;
                                                    endif;
                                                endforeach;

                                                $biaya = $berobat->biaya;
                                                
                                                echo 'Rp. '.$harga + $tarif + $biaya;
                                            ?>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="d-flex gap-2 mb-3">
								<a href="/klinik_ci3/berobat" class="btn btn-secondary"><i
										class="fas fa-arrow-left"></i></a>
								<div onclick="javascript: return confirm('Apakah Anda Yakin Ingin Hapus Data?')">
									<?= anchor('berobat/destroy/'.$berobat->id, '<div class="btn btn-danger"><i class="fas fa-trash"></i></div>') ?>
								</div>
								<div>
									<?= anchor('berobat/edit/'.$berobat->id, '<div class="btn btn-warning"><i class="fas fa-pen"></i></div>') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Rincian Biaya Berobat</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <table class="table table-borderless border">
                    <tbody>
                        <tr>
                            <th>Harga Obat </th>
                            <td> : </td>
                            <td>Rp. 
                                <?php 
                                    if ($berobat->obat_id === null) {
                                        echo 0  ;
                                    }else{
                                        foreach($obat as $o):
                                            if($o->id == $berobat->obat_id):
                                                echo $o->harga;
                                            endif;
                                        endforeach;
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Tarif Konsul Dokter </th>
                            <td> : </td>
                            <td>Rp. 
                                <?php 
                                    if ($berobat->nama_dokter_id === null) {
                                        echo 0;
                                    }else{
                                        foreach($dokter as $d):
                                            if($d->id == $berobat->nama_dokter_id):
                                                echo $d->tarif;
                                            endif;
                                        endforeach;
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr class="border-bottom">
                            <th>Biaya Administrasi</th>
                            <td> : </td>
                            <td>Rp. 
                                <?php 
                                    echo $berobat->biaya;
                                ?>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <th>
                                Total
                            </th>
                            <td>:</td>
                            <td>
                                <?php
                                    if($berobat->obat_id === null){
                                        $harga = 0;
                                    }else{
                                        foreach($obat as $hrg):
                                            if($hrg->id == $berobat->obat_id):
                                                $harga = $hrg->harga;
                                            endif;
                                        endforeach;
                                    }

                                    foreach($dokter as $trf):
                                        if($trf->id == $berobat->nama_dokter_id):
                                            $tarif = $trf->tarif;
                                        endif;
                                    endforeach;

                                    $biaya = $berobat->biaya;
                                    
                                    echo 'Rp. '.$harga + $tarif + $biaya;
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>
	</div>
</div>
