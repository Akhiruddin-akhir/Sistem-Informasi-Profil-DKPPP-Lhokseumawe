<?php Include 'application/config/koneksi.php'	?>
	<!DOCTYPE html>
	<html>
	
	<div class="container">
		<center><h2>Hasil Perikanan</h2></center>
		<br>
		<div class='float-right'>
	<h2 class='text text-primary'><button  id='print' class="btn btn-success" onClick='window.print();' data-toggle='tooltip' data-placement='right' 
	title='Klik tombol ini untuk mencetak hasil'><i class='fa fa-print'></i> Cetak</button> </h2>
</div>
 
		<table class="table table-bordered">
			<thead>				
				<tr>
					<th style="text-align: center;">No</th>
					<th style="text-align: center;">Nama</th>
					<th style="text-align: center;">Jenis</th>					
					<th style="text-align: center;">Jumlah</th>
					<th style="text-align: center;">Tahun</th>						
				</tr>				
			</thead>
			<tbody>
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
							
			</tbody>
		</table>
	</div>
</html>
	
