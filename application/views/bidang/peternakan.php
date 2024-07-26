<!DOCTYPE html>
	<html>
<div class="container">
		<center><h2>Hasil Pertanian</h2></center>
		<br>
		<div class='float-right'>
		<div class='float-right'>
		<h2 class='text text-primary'><button  id='print' class="btn btn-success" onClick='window.print();' data-toggle='tooltip' data-placement='right' 
		title='Klik tombol ini untuk mencetak hasil'><i class='fa fa-print'></i> Cetak</button> </h2>
		</div>
		<div class="col-12">
			<table class="table table-bordered">
				<tr class="success">
                <th width="10">No</th>
			    <th>Nama</th>
			    <th>Jumlah</th>
			    <th>Tahun</th>
				</tr>
				<?php if($peternakan) : $no=1; foreach($peternakan as $r) : ?>
				<tr>
                <td><?= $no; ?></td>
			    <td><?= $r->nama_hewan; ?></td>
			    <td><?= $r->jumlah; ?></td>
			    <td><?= $r->tahun; ?></td>
				</tr>
				<?php $no++; endforeach; ?>
				<?php else: ?>
				<tr>
					<td colspan="3" class="notFound">Data kosong</td>
				</tr>
				<?php endif; ?>
			</table>

		</div>
	</div>
</div>
				</html>