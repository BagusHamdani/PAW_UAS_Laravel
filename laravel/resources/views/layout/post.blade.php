<!DOCTYPE html>
<html>
<head>
	<title>MOVIST - Information Movies</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>
</head>
<body>
	<div id="content">
<form id="formberita" method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
	@csrf
  <center><br>
   <p>
   <label>Upload Photo :</label><br>
   <input type="file" id="images" name="images"/>
  </p><br>
  <p>
   <label>Judul :</label><br>
   <input type="text" id="judul_artikel" name="judul_artikel" >
  </p>

  <p>
   <label>Isi :</label><br>
   <textarea style="width:600px; height:450px" id="isi_artikel" name="isi_artikel"></textarea>
   
  </p>
 <label>Penulis :</label><br>
   <input type="text" id="penulis_artikel" name="penulis_artikel">
  </p>
  <br>

  <button name="submit">submit</button>
</form>

</body>
</html>