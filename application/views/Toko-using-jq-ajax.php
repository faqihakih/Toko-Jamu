<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col-12">
			<div class="col-md-12">
				<h1>List Toko<br>
					<div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#addTokoModal"><span class="fa fa-plus"></span>Add New</a></div><br>
				</h1>
			</div>
			<table class="table table-striped" id="tokoListing">
				<thead>
					<tr>
						<th>Name</th>
						<th>Lokasi</th>
						<th>Alamat</th>
						<th>Jam Kerja</th>
						<th>Gambar</th>
						<th style="text-align: right;">Actions</th>
					</tr>
				</thead>
				<tbody id="listRecords">
				</tbody>
			</table>
		</div>
	</div>

</div>
<form id="saveTokoForm" method="post">
	<div class="modal fade" id="addTokoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New Toko</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Nama Toko</label>
						<div class="col-md-10">
							<input type="text" name="name" id="name" class="form-control" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Lokasi</label>
						<div class="col-md-10">
							<input type="text" name="lokasi" id="lokasi" class="form-control" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
						</div>
						<?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
					</div>
					<div class="form-group row">
						<label for="harga" class="col-sm-2 col-form-label">jam Kerja</label>
						<div class="col-sm-10">
							<input type="text" name="jam_kerja" class="form-control" id="jam_kerja">
						</div>
						<?= form_error('jam_kerja', '<div class="text-small text-danger">', '</div>') ?>
					</div>
					<div class="form-group row">
						<label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
						<div class="col-sm-10">
							<!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div> -->
							<input type="text" class="form-control" id="gambar" name="gambar">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
</form>
<form id="editTokoForm" method="post">
	<div class="modal fade" id="editTokoModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editModalLabel">Edit Toko</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Nama Toko</label>
						<div class="col-md-10">
							<input type="text" name="name" id="namaTk" class="form-control" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Lokasi</label>
						<div class="col-md-10">
							<input type="text" name="lokasi" id="lokasiTk" class="form-control" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="alamat" id="alamatTk" rows="3"></textarea>
						</div>
						<?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
					</div>
					<div class="form-group row">
						<label for="harga" class="col-sm-2 col-form-label">jam Kerja</label>
						<div class="col-sm-10">
							<input type="text" name="jam_kerja" class="form-control" id="jam_kerjaTk">
						</div>
						<?= form_error('jam_kerja', '<div class="text-small text-danger">', '</div>') ?>
					</div>
					<div class="form-group row">
						<label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
						<div class="col-sm-10">
							<!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div> -->
							<input type="text" class="form-control" id="gambarTk" name="gambar">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="idTk" id="idTk" class="form-control">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
	</div>
</form>
<form id="deleteEmpForm" method="post">
	<div class="modal fade" id="deleteEmpModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="deleteModalLabel">Delete Toko</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<strong>Are you sure to delete this record?</strong>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="deleteEmpId" id="deleteEmpId" class="form-control">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<button type="submit" class="btn btn-primary">Yes</button>
				</div>
			</div>
		</div>
	</div>
</form>