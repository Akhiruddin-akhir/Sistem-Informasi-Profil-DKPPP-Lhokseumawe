<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Edit Bidang Peternakan</h3>
	<hr>
	<?php if($peternakan??false) : ?>
	<?= form_open('adminBidang/editPerternakan',['class'=>'form']); ?>
		<input type="hidden" name="hewan_id" value="<?= $peternakan->hewan_id??''; ?>">

		<?= $errors['nama_hewan']??''; ?>
		<input type="text" name="nama_hewan" placeholder="nama hewan" class="form-control" value="<?= $peternakan->nama_hewan??''; ?>">
		<?= $errors['jumlah']??''; ?>
		<input type="text" name="jumlah" placeholder="jumlah" class="form-control" value="<?= $peternakan->jumlah??''; ?>">
        <?= $errors['tahun']??''; ?>
		<input type="text" name="tahun" placeholder="tahun" class="form-control" value="<?= $peternakan->tahun??''; ?>">
        
		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminBidang/perternakan'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>