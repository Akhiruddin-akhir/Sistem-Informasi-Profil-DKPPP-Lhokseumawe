<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Insert Bidang Pertanian</h3>
	<hr>
	<?= form_open('adminBidang/insertPertanian',['class'=>'form']); ?>
	
        <?= $errors['nama_kebun']??''; ?>
		<input type="text" name="nama_kebun" placeholder="nama kebun" class="form-control" value="<?= $old_value['nama_kebun']??''; ?>">
		<?= $errors['jenis']??''; ?>
		<input type="text" name="jenis" placeholder="jenis" class="form-control" value="<?= $old_value['jenis']??''; ?>">
        <?= $errors['jumlah']??''; ?>
		<input type="text" name="jumlah" placeholder="jumlah" class="form-control" value="<?= $old_value['jumlah']??''; ?>">
        <?= $errors['tahun']??''; ?>
		<input type="text" name="tahun" placeholder="tahun" class="form-control" value="<?= $old_value['tahun']??''; ?>">
        
		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminBidang/perkebunan') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>