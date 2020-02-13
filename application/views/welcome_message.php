<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<title>Trường Đẹp Zai</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<h1 class="text-center">Quản Lý Giáo Viên</h1>
				<hr style="background-color: black; color:black; height:1px;">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-2">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
					Tạo Giáo Viên
				</button>

				<!-- add data -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Thêm Giáo Viên</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="" method="post" id="form">
									<div class="form-group">
										<label for="">Tên Giáo Viên</label>
										<input type="text" id="ten_gv" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Ngày Sinh</label>
										<input type="date" id="ngaysinh_gv" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Lớp Dạy</label>
										<input type="text" id="lop_day" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Môn Dạy</label>
										<input type="text" id="mon_day" class="form-control">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary " id="add">Tạo</button>
							</div>
						</div>
					</div>
				</div>

				<!-- edit data -->
				<div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Sửa Thông Tin Giáo Viên</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="" method="post" id="edit_form">
									<input type="hidden" id="edit_model_id" value="">
									<div class="form-group">
										<label for="">Tên Giáo Viên</label>
										<input type="text" id="edit_ten_gv" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Ngày Sinh</label>
										<input type="date" id="edit_ngaysinh_gv" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Lớp Dạy</label>
										<input type="text" id="edit_lop_day" class="form-control">
									</div>
									<div class="form-group">
										<label for="">Môn Dạy</label>
										<input type="text" id="edit_mon_day" class="form-control">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary " id="update">Sửa</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-3">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên Giáo Viên</th>
							<th>Ngày Sinh</th>
							<th>Lớp dạy</th>
							<th>Môn dạy</th>
							<th>Tùy Biến</th>
						</tr>
					</thead>
					<tbody id="tbody">

					</tbody>
				</table>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

		<script>
			$(document).on("click", "#add", function(e) {
				e.preventDefault();

				var ten_gv = $("#ten_gv").val();
				var ngaysinh_gv = $("#ngaysinh_gv").val();
				var lop_day = $("#lop_day").val();
				var mon_day = $("#mon_day").val();
				if (ten_gv == "" || ngaysinh_gv == "" || lop_day == "" || mon_day == "") {
					alert("all field is required");
				} else {
					$.ajax({
						url: "<?php echo base_url(); ?>insert",
						type: "post",
						dataType: "json",
						data: {
							ten_gv: ten_gv,
							ngaysinh_gv: ngaysinh_gv,
							lop_day: lop_day,
							mon_day: mon_day
						},
						success: function(data) {
							fetch();
							

							if (data.responce == "success") {
								toastr["success"](data.message);

								toastr.options = {
									"closeButton": true,
									"debug": false,
									"newestOnTop": false,
									"progressBar": true,
									"positionClass": "toast-top-right",
									"preventDuplicates": false,
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								}
								$('#exampleModal').modal('hide');
							} else {
								toastr["error"](data.message);

								toastr.options = {
									"closeButton": true,
									"debug": false,
									"newestOnTop": false,
									"progressBar": true,
									"positionClass": "toast-top-right",
									"preventDuplicates": false,
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								}
							}


						}
					});
				}

				$("#form")[0].reset();
			});

			function fetch() {
				$.ajax({
					url: "<?php echo base_url(); ?>fetch",
					type: "post",
					dataType: "json",
					success: function(data) {
						var tbody = "";

						for (var key in data) {
							tbody += "<tr>";
							tbody += "<td>" + data[key]['id'] + "</td>";
							tbody += "<td>" + data[key]['ten_gv'] + "</td>";
							tbody += "<td>" + data[key]['ngaysinh_gv'] + "</td>";
							tbody += "<td>" + data[key]['lop_day'] + "</td>";
							tbody += "<td>" + data[key]['mon_day'] + "</td>";
							tbody += `<td>
										<a href="#" id="del" class="btn btn-sm btn-outline-danger" 
										value="${data[key]['id']}"><i class="fas fa-trash-alt"></i></a> 
										<a href="#" id="edit" class="btn btn-sm btn-outline-info" 
										value="${data[key]['id']}"><i class="fas fa-edit"></i></a> 
							
							 </td>`;
							tbody += "/<tr>";
						}
						$("#tbody").html(tbody);
					}
				});
			}
			fetch();
			$(document).on("click", "#del", function(e) {
				e.preventDefault();

				var del_id = $(this).attr("value");

				if (del_id == "") {
					alert("Delete is requied")
				} else {
					const swalWithBootstrapButtons = Swal.mixin({
						customClass: {
							confirmButton: 'btn btn-success',
							cancelButton: 'btn btn-danger mr-2'
						},
						buttonsStyling: false
					})

					swalWithBootstrapButtons.fire({
						title: 'Bạn Chắc Chắn Chứ ?',
						text: "Bạn không thể khôi phục chúng!",
						icon: 'warning',
						showCancelButton: true,
						confirmButtonText: 'Xóa !',
						cancelButtonText: 'Không, Hủy !',
						reverseButtons: true
					}).then((result) => {
						if (result.value) {

							$.ajax({
								url: "<?php echo base_url(); ?>delete",
								type: "post",
								dataType: "json",
								data: {
									del_id: del_id
								},
								success: function(data) {
									fetch();
									if (data.responce == "success") {
										swalWithBootstrapButtons.fire(
											'Đã Xóa!',
											'Dữ Liệu đã được xóa.',
											'Thành Công!'
										)
									}
								}
							});

						} else if (
							/* Read more about handling dismissals below */
							result.dismiss === Swal.DismissReason.cancel
						) {
							swalWithBootstrapButtons.fire(
								'Đã Hủy!',
								'Dữ liệu chưa được xóa. :)',
								'Đã hủy'
							)
						}
					})
				}
			});

			$(document).on("click", "#edit", function(e) {
				e.preventDefault();

				var edit_id = $(this).attr("value");

				if (edit_id == "") {
					alert("Delete is requied")
				} else {
					$.ajax({
						url: "<?php echo base_url(); ?>edit",
						type: "post",
						dataType: "json",
						data: {
							edit_id: edit_id
						},
						success: function(data) {
							if (data.responce == "success") {
								$('#editModel').modal('show');
								$("#edit_model_id").val(data.post.id);
								$("#edit_ten_gv").val(data.post.ten_gv);
								$("#edit_ngaysinh_gv").val(data.post.ngaysinh_gv);
								$("#edit_lop_day").val(data.post.lop_day);
								$("#edit_mon_day").val(data.post.mon_day);
							} else {
								toastr["success"](data.message);

								toastr.options = {
									"closeButton": true,
									"debug": false,
									"newestOnTop": false,
									"progressBar": true,
									"positionClass": "toast-top-right",
									"preventDuplicates": false,
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								}
							}
						}
					});
				}
			});

			//update data
			$(document).on("click", "#update", function(e) {
				e.preventDefault();

				var edit_id = $("#edit_model_id").val();
				var edit_ten_gv = $("#edit_ten_gv").val();
				var edit_ngaysinh_gv = $("#edit_ngaysinh_gv").val();
				var edit_lop_day = $("#edit_lop_day").val();
				var edit_mon_day = $("#edit_mon_day").val();

				if (edit_id == "" || edit_ten_gv == "" || edit_ngaysinh_gv == "" || edit_lop_day == "" ||
					edit_mon_day == "") {
					alert("all field is required");
				} else {

					$.ajax({
						url: "<?php echo base_url(); ?>update",
						type: "post",
						dataType: "json",
						data: {
							edit_id: edit_id,
							edit_ten_gv: edit_ten_gv,
							edit_ngaysinh_gv: edit_ngaysinh_gv,
							edit_lop_day: edit_lop_day,
							edit_mon_day: edit_mon_day
						},
						success: function(data) {
							fetch();
							if (data.responce == "success") {
								$('#editModel').modal('hide');
								toastr["success"](data.message);

								toastr.options = {
									"closeButton": true,
									"debug": false,
									"newestOnTop": false,
									"progressBar": true,
									"positionClass": "toast-top-right",
									"preventDuplicates": false,
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								}
							} else {
								toastr["error"](data.message);

								toastr.options = {
									"closeButton": true,
									"debug": false,
									"newestOnTop": false,
									"progressBar": true,
									"positionClass": "toast-top-right",
									"preventDuplicates": false,
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								}
							}
						}
					});
				}
			});
		</script>

</body>

</html>