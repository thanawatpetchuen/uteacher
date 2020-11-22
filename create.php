<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="index.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <div class="container" style="justify-content: center">
    <div style="width: 60%;margin-top: 3%">
      <form action="/api/create_teacher.php" method="POST">
        <div class="form-group">
          <label for="name">ชื่อ-นามสกุล</label>
          <input type="text" class="form-control" id="name" name="UteacherNAME">
        </div>
        <div class="form-group">
          <label for="rank">ตำแหน่งทางวิชาการ</label>
          <input type="text" class="form-control" id="rank" name="RANK">
        </div>
        <div class="form-group">
          <label for="education">วุฒิการศึกษา</label>
          <input type="text" class="form-control" id="education"  name="Education">
        </div>
        <button type="submit" class="btn btn-primary">สร้าง</button>
      </form>
    </div>
  </div>
</body>

</html>