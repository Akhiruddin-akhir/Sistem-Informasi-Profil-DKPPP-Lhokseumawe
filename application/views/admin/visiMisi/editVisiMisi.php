<div class="col-md-12 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Edit Visi Misi</h3>
	<hr>
	<?php if($visi_misi??false) : ?>
	<?= form_open('adminProfile/editVisiMisi',['class'=>'form']); ?>
		<div class="col-md-6">
			<label>Visi</label>
			<?= $errors['visi']??''; ?>
			<textarea rows="5" class="ckeditor" id="ckeditor" name="visi" placeholder="visi"><?= $visi_misi->visi??''; ?></textarea>
		</div>
		<div class="col-md-6">
			<label>Misi</label>
			<?= $errors['misi']??''; ?>
			<textarea rows="5" class="ckeditor" id="ckeditor" name="misi" placeholder="misi"><?= $visi_misi->misi??''; ?></textarea>
		</div>

		<div class="col-md-12">
			<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
			<a href="<?= base_url('adminProfile/visiMisi'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
	</form>
	<?php endif; ?>
</div>