<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
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
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			const data = [{
				rank: "RANK",
				name: "NAME",
				education: "UNIVERSITY",
				course: "001",
				facultyId: "002"
			}]

			$('#table_id').DataTable({
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
				]
			});
		});
	</script>
</body>

</html>