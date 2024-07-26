<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Insert Bidang Perikanan</h3>
	<hr>
	<?= form_open('adminBidang/insertPerikanan',['class'=>'form']); ?>
	
        <?= $errors['nama_ikan']??''; ?>
		<input type="text" name="nama_ikan" placeholder="nama ikan" class="form-control" value="<?= $old_value['nama_ikan']??''; ?>">
		<?= $errors['jenis']??''; ?>
		<input type="text" name="jenis" placeholder="jenis" class="form-control" value="<?= $old_value['jenis']??''; ?>">
        <?= $errors['jumlah']??''; ?>
		<input type="text" name="jumlah" placeholder="jumlah" class="form-control" value="<?= $old_value['jumlah']??''; ?>">
        <?= $errors['tahun']??''; ?>
		<input type="text" name="tahun" placeholder="tahun" class="form-control" value="<?= $old_value['tahun']??''; ?>">
        
		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminBidang/perikanan') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>