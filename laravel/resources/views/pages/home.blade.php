@extends('layout.frontend.master')
@section('content')
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
					<h3>LATEST MOVIES</h3>
					<p class="text-right"><a href="http://localhost/movist/showall.php">See all</a></p>
				</div>

		<div class="cl">&nbsp;</div>
	</div>
	<!-- end Main -->
@stop