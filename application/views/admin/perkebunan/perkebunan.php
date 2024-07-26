<div class="col-md-12 nopadding-all marginTop60px">
	<table class="table table-bordered">
		<tr class="success">
			<td colspan="5"><h3 align="center">Hasil Pertanian</h3></td>
		</tr>
		<tr>
			<th width="10">No</th>
			<th>Nama</th>
			<th>Jenis</th>
            <th>Jumlah</th>
			<th>Tahun</th>            
			<th colspan="2" class="alignCenter">
                <a href="<?= base_url('adminBidang/insertPerkebunan'); ?>"><span class="glyphicon glyphicon-plus"></span></a>
            </th>
		</tr>
		<?php if($perkebunan) : $no=1; foreach($perkebunan as $r) : ?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $r->nama_kebun; ?></td>
			<td><?= $r->jenis; ?></td>
            <td><?= $r->jumlah; ?></td>
			<td><?= $r->tahun; ?></td>

			<td width="10"><a hover="blue" href="<?= base_url('adminBidang/editPerkebunan/'.$r->kebun_id); ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td width="10"><a hover="red" href="<?= base_url('adminBidang/deletePerkebunan/'.$r->kebun_id); ?>"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
		</tr>
		<?php $no++; endforeach; else: ?>
		<tr>
			<td class="notFound" colspan="5">Data kosong</td>
		</tr>
		<?php endif; ?>
	</table>
</div>