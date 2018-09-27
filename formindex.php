<?php include("connection.php"); ?>
<!DOCTYPE>
<html>
<head>
	<title>คณะและสาขาในมหาวิทยาลัยทั้ง3แห่ง</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<script src="jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<style>
body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}
.panel{
width: intrinsic; 
width: -moz-max-content; 
width: -webkit-max-content;
}
</style>
</head>
<body>
	<!-- Top Nav bar -->
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><h3>ชื่อคณะ/สาขาในมหาวิทยาลัยต่างๆ</h3></a>
    </div>
    <br>
    <br>
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#">Northbangkok University</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Bangkok University</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Siam University</a>
  </li>
   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</ul>
  </div>
</nav>
<!-- Panel -->
<!-- Default dropright button -->

<!-- Column -->

  <form action="insert.php" method="post">
     <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">ชื่อคณะ</span>
        </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="n_name">
     </div>

      <?php
          $sql="select * from northbkk_name";
          $res=$conn->query($sql);
          while($arr=$res->fetch()){
      ?>
          <option value="<?php echo $arr['n_id'] ?>"><?php echo $arr['n_name'] ?></option>
      <?php } ?>

        </select>
        <br>
        <input type="submit" value="บันทึก">

  </form>

  <form action="insert1.php" method="post">
     <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">ชื่อสาขา</span>
        </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="north_name">
     </div>
      <?php
          $sql="select * from north_tb";
          $res=$conn->query($sql);
          while($arr=$res->fetch()){
      ?>
          <option value="<?php echo $arr['north_id'] ?>"><?php echo $arr['north_name'] ?></option>
      <?php } ?>

        </select>
        <br>
        <input type="submit" value="บันทึก">

  </form>

</body>
</html>
