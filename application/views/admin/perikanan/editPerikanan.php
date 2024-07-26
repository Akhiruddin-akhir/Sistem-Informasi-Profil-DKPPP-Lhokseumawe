<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Edit Bidang Perikanan</h3>
	<hr>
	<?php if($perikanan??false) : ?>
	<?= form_open('adminBidang/editPerikanan',['class'=>'form']); ?>
		<input type="hidden" name="ikan_id" value="<?= $perikanan->ikan_id??''; ?>">

		<?= $errors['nama_ikan']??''; ?>
		<input type="text" name="nama_ikan" placeholder="nama ikan" class="form-control" value="<?= $perikanan->nama_ikan??''; ?>">
		<?= $errors['jenis']??''; ?>
		<input type="text" name="jenis" placeholder="jenis" class="form-control" value="<?= $perikanan->jenis??''; ?>">
        <?= $errors['jumlah']??''; ?>
		<input type="text" name="jumlah" placeholder="jumlah" class="form-control" value="<?= $perikanan->jumlah??''; ?>">
        <?= $errors['tahun']??''; ?>
		<input type="text" name="tahun" placeholder="tahun" class="form-control" value="<?= $perikanan->tahun??''; ?>">
        
		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminBidang/perikanan'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>