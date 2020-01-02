<form id="formUpdate" method="post">
	<input type="hidden" name="edit_id" id="edit_id" value="<?php echo $data_by['id'] ?>">
	<div class="form-group form-material floating" data-plugin="formMaterial">
		<div class="col-md-12">
			<label class="">Position Name</label>
			<input type="text" class="form-control" name="edit_position_name" id="edit_position_name" value="<?php echo $data_by['applicator_position'] ?>" required>
		</div>
	</div>
</div>
<div class="modal-footer">
	<div class="form-actions">
		<button class="btn btn-primary" type="submit">Update</button>
		<a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
	</div>
</div>
</form>
