<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Edit Bidang Pertanian</h3>
	<hr>
	<?php if($perkebunan??false) : ?>
	<?= form_open('adminBidang/editPerkebunan',['class'=>'form']); ?>
		<input type="hidden" name="kebun_id" value="<?= $perkebunan->kebun_id??''; ?>">

		<?= $errors['nama_kebun']??''; ?>
		<input type="text" name="nama_kebun" placeholder="nama kebun" class="form-control" value="<?= $perkebunan->nama_kebun??''; ?>">
		<?= $errors['jenis']??''; ?>
		<input type="text" name="jenis" placeholder="jenis" class="form-control" value="<?= $perkebunan->jenis??''; ?>">
        <?= $errors['jumlah']??''; ?>
		<input type="text" name="jumlah" placeholder="jumlah" class="form-control" value="<?= $perkebunan->jumlah??''; ?>">
        <?= $errors['tahun']??''; ?>
		<input type="text" name="tahun" placeholder="tahun" class="form-control" value="<?= $perkebunan->tahun??''; ?>">
        
		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminBidang/perkebunan'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>