<?php  


$server= "localhost";  

$username = "root";   

$password = "";   

$database = "movist";  


  

mysqli_connect($server,$username,$password) or die ("Koneksi Gagal");  

mysqli_select_db($database) or die ("Database Tidak Bisa Di Buka " );  

  

?>