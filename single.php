<head>
	<title>MOVIST - Information of Movies</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>
</head>
<body>
<!-- Shell -->
<div id="shell">
	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="http://localhost/movist/home.php">MOVIST</a></h1>
		<div class="social">
			<span>FOLLOW US ON:</span>
			<ul>
			    <li><a class="twitter" href="#">twitter</a></li>
			    <li><a class="facebook" href="#">facebook</a></li>
			    <li><a class="vimeo" href="#">vimeo</a></li>
			    <li><a class="rss" href="#">rss</a></li>
			</ul>
		</div>
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a class="active" href="http://localhost/movist/home.php">HOME</a></li>
			    <li><a href="http://localhost/movist/list.php">LIST</a></li>
			    <li><a href="http://localhost/movist/genres.php">GENRES</a></li>
			    <li><a href="http://localhost/movist/contact.php">CONTACT</a></li>
			</ul>
		</div>
		<!-- end Navigation -->
		
		<!-- Sub-menu -->
		<div id="sub-navigation">
			<ul>
			    <li><a href="http://localhost/movist/showall.php">SHOW ALL</a></li>
			    <li><a href="http://localhost/movist/home.php">LATEST MOVIES</a></li>
			    <li><a href="http://localhost/movist/popular.php">POPULAR MOVIES</a></li>
			</ul>
			<div id="search">
				<form action="home_submit" method="get" accept-charset="utf-8">
					<label for="search-field">SEARCH</label>					
					<input type="text" name="search field" value="Enter search here" id="search-field" title="Enter search here" class="blink search-field"  />
					<input type="submit" value="GO!" class="search-button" />
				</form>
			</div>
		</div>
		<!-- end Sub-Menu -->
		
	</div>
	<!-- end Header -->
	
	<!-- Main -->
	<div id="main">
		<!-- Content -->
		<div id="content">

			<!-- Box -->
			<div class="box">
				<div class="head">
				</div>

<?php

include "koneksi.php";

$id = $_GET['p'];

$hasil = mysqli_query("select * from artikel where id_artikel='$id'");
$data=mysqli_fetch_array($hasil);
$file = 'artikel/'.$data['photo_artikel'].'';
 if ($file =="artikel/"){
echo '
<h3> '.$data['judul_artikel'].' </h3> 
<p>Posted by '.$data['penulis_artikel'].' <br>
Pada Tanggal '.$data['tgl_artikel'].'</p> 
<p>'.$data['isi_artikel'].'</p>  
';}
 else {
 echo '
     
<center><img width="200" src="photo-artikel/'.$data['photo_artikel'].'" alt="" /></center>
<h3>'.$data['judul_artikel'].'</h3>
<p>'.$data['isi_artikel'].'</p>  
<br> 
<p>Posted by '.$data['penulis_artikel'].' <br> 
Pada Tanggal '.$data['tgl_artikel'].'</p>    
 ';}
 ?>
<br>
<!--tampilkan form komentar-->
  <h3>Review</h3>
  <form method="POST">
    <input type="text" name="nama"><br>
    <textarea name="komentar"></textarea><br>
    <input type="submit" name="kirim" value="Send Review">
  </form>
<div class="cl">&nbsp;</div>
	</div>
	<!-- end Main -->

	<!-- Footer -->
	<div id="footer">
		<p> Copyright &copy; 2018 MOVIST.  Designed by <a href="http://komikmax.ml" target="_blank" title="Download Volume Komik Indonesia">Raden Irham</a></p>
	</div>
	<!-- end Footer -->
</div>
<!-- end Shell -->
</body>
</html>