<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="index.css">

  <?php
    include('loader/header.php')
  ?>
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