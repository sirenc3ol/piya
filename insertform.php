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
  <form class="panel panel-primary" action="insert.php" method="post">
     <div class="form-group">
        <label for="usr">คณะ</label>
          <input type="text" class="form-control" id="north_name">
      </div>

  
    		<br>
    		<input type="submit" value="บันทึก">

  </form>

  <form class="panel panel-primary" action="insert1.php" method="post">
     <div class="form-group">
        <label for="usr">สาขา</label>
          <input type="text" class="form-control" id="n_name">
      </div>
    	

    		</select>
    		<br>
    		<input type="submit" value="บันทึก">

  </form>
</body>



<html>
