$(document).ready(function () {
	listEmployee();
	var table = $('#tokoListing').dataTable({
		"bPaginate": false,
		"bInfo": false,
		"bFilter": false,
		"bLengthChange": false,
		"pageLength": 5
	});
	// list all employee in datatable
	function listEmployee() {
		$.ajax({
			type: 'ajax',
			url: 'Toko_ajax/show',
			async: false,
			dataType: 'json',
			success: function (data) {
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
	// save new employee record
	$('#saveTokoForm').submit('click', function () {
		var nameTk = $('#name').val();
		var lokasiTk = $('#lokasi').val();
		var alamaTk = $('#alamat').val();
		var jam_kerjaTk = $('#jam_kerja').val();
		var gambarTk = $('#gambar').val();
		$.ajax({
			type: "POST",
			url: "Toko_ajax/save",
			dataType: "JSON",
			data: { name: nameTk, lokasi: lokasiTk, alamat: alamaTk, jam_kerja: jam_kerjaTk, gambar: gambarTk },
			success: function (data) {
				$('#name').val("");
				$('#alamat').val("");
				$('#jam_kerja').val("");
				$('#addTokoModal').modal('hide');
				listEmployee();
			}
		});
		return false;
	});
	// show edit modal form with emp data
	$('#listRecords').on('click', '.editRecord', function () {
		$('#editTokoModal').modal('show');
		$("#idTk").val($(this).data('id'));
		$("#namaTk").val($(this).data('name'));
		$("#lokasiTk").val($(this).data('age'));
		$("#alamatTk").val($(this).data('designation'));
		$("#jam_kerjaTk").val($(this).data('skills'));
		$("#gambarTk").val($(this).data('address'));
	});
	// save edit record
	$('#editTokoForm').on('submit', function () {
		var idTk = $('#idTk').val();
		var nameTk = $('#namaTk').val();
		var lokasiTk = $('#lokasiTk').val();
		var alamatTk = $('#alamatTk').val();
		var jam_kerjaTk = $('#jam_kerjaTk').val();
		var gambarTk = $('#gambarTk').val();
		$.ajax({
			type: "POST",
			url: "Toko_ajax/update",
			dataType: "JSON",
			data: { id: idTk, name: nameTk, lokasi: lokasiTk, alamat: alamatTk, jam_kerja: jam_kerjaTk, gambar: gambarTk },
			success: function (data) {
				$("#idTk").val("");
				$("#namaTk").val("");
				$('#lokasiTk').val("");
				$("#alamatTk").val("");
				$('#jam_kerjaTK').val("");
				$("#gambarTk").val("");
				$('#editTokoModal').modal('hide');
				listEmployee();
			}
		});
		return false;
	});
	// show delete form
	$('#listRecords').on('click', '.deleteRecord', function () {
		var empId = $(this).data('id');
		$('#deleteEmpModal').modal('show');
		$('#deleteEmpId').val(empId);
	});
	// delete emp record
	$('#deleteEmpForm').on('submit', function () {
		var empId = $('#deleteEmpId').val();
		$.ajax({
			type: "POST",
			url: "Toko_ajax/delete",
			dataType: "JSON",
			data: { id: empId },
			success: function (data) {
				$("#" + empId).remove();
				$('#deleteEmpId').val("");
				$('#deleteEmpModal').modal('hide');
				listEmployee();
			}
		});
		return false;
	});
});