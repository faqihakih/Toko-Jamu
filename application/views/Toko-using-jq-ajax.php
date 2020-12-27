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
						<th>Jam Kerja</th>
						<th>Alamat</th>
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
<script>
	$(document).ready(function() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		listToko();
		var table = $('#tokoListing').dataTable({
			"bPaginate": false,
			"bInfo": false,
			"bFilter": false,
			"bLengthChange": false,
			"pageLength": 5
		});
		// list all toko in datatable
		function listToko() {
			$.ajax({
				type: 'GET',
				url: 'http://uaswp2.epizy.com/Toko_ajax/show',
				async: true,
				dataType: 'json',
				success: function(data) {
					var html = '';
					var i;
					for (i = 0; i < data.length; i++) {
						html += '<tr id="' + data[i].id + '">' +
							'<td>' + data[i].nama + '</td>' +
							'<td>' + data[i].lokasi + '</td>' +
							'<td>' + data[i].alamat + '</td>' +
							'<td>' + data[i].jam_kerja + '</td>' +
							'<td>' + data[i].gambar + '</td>' +
							'<td style="text-align:right;">' +
							'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="' + data[i].id + '" data-name="' + data[i].nama + '" data-age="' + data[i].lokasi + '" data-skills="' + data[i].alamat + '" data-designation="' + data[i].jam_kerja + '" data-address="' + data[i].gambar + '">Edit</a>' + ' ' +
							'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="' + data[i].id + '">Delete</a>' +
							'</td>' +
							'</tr>';
					}
					$('#listRecords').html(html);
				}

			});
		}
		// save new toko record
		$('#saveTokoForm').submit('click', function() {
			var nameTk = $('#name').val();
			var lokasiTk = $('#lokasi').val();
			var alamaTk = $('#alamat').val();
			var jam_kerjaTk = $('#jam_kerja').val();
			var gambarTk = $('#gambar').val();
			$.ajax({
				type: "POST",
				url: "http://uaswp2.epizy.com/Toko_ajax/save",
				dataType: "JSON",
				data: {
					name: nameTk,
					lokasi: lokasiTk,
					alamat: alamaTk,
					jam_kerja: jam_kerjaTk,
					gambar: gambarTk
				},
				success: function(data) {
					$('#name').val("");
					$('#alamat').val("");
					$('#jam_kerja').val("");
					$('#addTokoModal').modal('hide');
					listToko();
				}
			});
			return false;
		});
		// show edit modal form with toko data
		$('#listRecords').on('click', '.editRecord', function() {
			$('#editTokoModal').modal('show');
			$("#idTk").val($(this).data('id'));
			$("#namaTk").val($(this).data('name'));
			$("#lokasiTk").val($(this).data('age'));
			$("#alamatTk").val($(this).data('designation'));
			$("#jam_kerjaTk").val($(this).data('skills'));
			$("#gambarTk").val($(this).data('address'));
		});
		// save edit record
		$('#editTokoForm').on('submit', function() {
			var idTk = $('#idTk').val();
			var nameTk = $('#namaTk').val();
			var lokasiTk = $('#lokasiTk').val();
			var alamatTk = $('#alamatTk').val();
			var jam_kerjaTk = $('#jam_kerjaTk').val();
			var gambarTk = $('#gambarTk').val();
			$.ajax({
				type: "POST",
				url: "http://uaswp2.epizy.com/Toko_ajax/update",
				dataType: "JSON",
				data: {
					id: idTk,
					name: nameTk,
					lokasi: lokasiTk,
					alamat: alamatTk,
					jam_kerja: jam_kerjaTk,
					gambar: gambarTk
				},
				success: function(data) {
					$("#idTk").val("");
					$("#namaTk").val("");
					$('#lokasiTk').val("");
					$("#alamatTk").val("");
					$('#jam_kerjaTK').val("");
					$("#gambarTk").val("");
					$('#editTokoModal').modal('hide');
					listToko();
				}
			});
			return false;
		});
		// show delete form
		$('#listRecords').on('click', '.deleteRecord', function() {
			var empId = $(this).data('id');
			$('#deleteEmpModal').modal('show');
			$('#deleteEmpId').val(empId);
		});
		// delete emp record
		$('#deleteEmpForm').on('submit', function() {
			var empId = $('#deleteEmpId').val();
			$.ajax({
				type: "POST",
				url: "Toko_ajax/delete",
				dataType: "JSON",
				data: {
					id: empId
				},
				success: function(data) {
					$("#" + empId).remove();
					$('#deleteEmpId').val("");
					$('#deleteEmpModal').modal('hide');
					listToko();
				}
			});
			return false;
		});
	});
</script>