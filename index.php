<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>Capturar pantalla del sitio web desde URL PHP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<style type="text/css">
* {
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif
}
.main {
	margin:auto;
	border:1px solid #7C7A7A;
	width:70%;
	text-align:left;
	padding:30px;
	background:#85c587
}
input[type=submit] {
	background:#6ca16e;
	width:100%;
	padding:5px 15px;
	background:#ccc;
	cursor:pointer;
	font-size:16px;
}
input[type=text] {
	width:40%;
	padding:5px 15px;
	height:25px;
	font-size:16px;
}
.form-control {
	padding: 0px 0px;
}
</style>
</head>
<body bgcolor="#bed7c0">
<br>
<div class="main">
  <h1>Cargar múltiples archivos PHP</h1>
  <div class="panel panel-primary">
    <div class="panel-body">
      <form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
        <h4 class="text-center">Cargar Múltiple Archivos</h4>
        <div class="form-group">
          <label class="col-sm-2 control-label">Archivos</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="miarchivo[]" name="miarchivo[]" multiple="">
          </div>
          <button type="submit" class="btn btn-primary">Cargar Multiple</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>