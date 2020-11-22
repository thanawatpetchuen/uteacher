<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php
	include('loader/header.php')
	?>
	<?php
	include('loader/table.php')
	?>
</head>

<body>
	<div class="container" style="justify-content: center">
		<div style="margin-top: 3%;width: 100%">
			<div class="d-flex justify-content-end mb-4">
				<a class="btn btn-primary" href="/create.php">สร้างอาจารย์</a>
			</div>
			<table id="table_id" class="display">
				<thead>
					<tr>
						<th>ตำแหน่งทางวิชาการ</th>
						<th>ชื่อ-นามสกุล</th>
						<th>วุฒิการศึกษา</th>
						<th>หลักสูตร</th>
						<th>สาขาวิชา</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			function deleteTeacher(id) {
				$.ajax({
					method: "POST",
					url: "/api/delete_teacher.php",
					data: {
						id
					},
					success: function() {
						window.location.reload()
					},
					error: function() {
						alert("ลบไม่สำเร็จ")
					}
				})
			}

			$table = $('#table_id').DataTable({
				ajax: {
					url: "/api/teacher.php",
					dataSrc: "",
				},
				columns: [{
						data: 'RANK',
					},
					{
						data: 'UteacherNAME'
					},
					{
						data: 'Education'
					},
					{
						data: 'course'
					},
					{
						data: 'FacultyID'
					},
					{
						data: null,
						render: function(data, type, row) {
							return '<button class="btn btn-danger">ลบ</button>';
						}
					}
				]
			});

			$table.on('click', 'button', function() {
				var RowIndex = $(this).closest('tr');
        var data = $table.row(RowIndex).data();
				deleteTeacher(data.UteacherID)
			})
		});
	</script>
</body>

</html>