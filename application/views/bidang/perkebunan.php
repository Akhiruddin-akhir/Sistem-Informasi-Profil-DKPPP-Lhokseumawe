<div class="kejuaruanC marginTop60px">
	<div class="container">
		<h3 class="judulAbuAbu alignCenter">Hasil Pertanian</h3>
		<hr>
		<div class='float-right'>
		<h2 class='text text-primary'><button  id='print' class="btn btn-success" onClick='window.print();' data-toggle='tooltip' data-placement='right' 
		title='Klik tombol ini untuk mencetak hasil'><i class='fa fa-print'></i> Cetak</button> </h2>
		</div>
		<div class="col-12">
			<table class="table table-bordered">
				<tr class="success">
                <th width="10">No</th>
			    <th>Nama</th>
			    <th>Jenis</th>
                <th>Jumlah</th>
			    <th>Tahun</th>
				</tr>
				<?php if($perkebunan) : $no=1; foreach($perkebunan as $r) : ?>
				<tr>
                <td><?= $no; ?></td>
			    <td><?= $r->nama_kebun; ?></td>
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