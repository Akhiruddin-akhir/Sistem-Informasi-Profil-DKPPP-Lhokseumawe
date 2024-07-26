<div class="pangan marginTop60px">
	<div class="container">
		<h3 class="judulAbuAbu alignCenter">Hasil </h3>
		<hr>
		<div class="col-12">
			<table class="table table-bordered">
				<tr class="success">
                <th width="10">No</th>
			    <th>Nama</th>
			    <th>Jenis</th>
                <th>Jumlah</th>
			    <th>Tahun</th>
				</tr>
				<?php if($perikanan) : $no=1; foreach($perikanan as $r) : ?>
				<tr>
                <td><?= $no; ?></td>
			    <td><?= $r->nama_ikan; ?></td>
			    <td><?= $r->jenis; ?></td>
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