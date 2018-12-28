<?php
require_once “koneksi.php”;
$query??? = “select nama_komentar, isi_komentar from komentarnya where id_artikel=$id order by id desc”;
$runquery = mysql_query($query);

while ($result = mysql_fetch_array($runquery))
{

$nama_komentar = $result[‘nama_komentar’];
$isikomentar = $result[‘isi_komentar’];

print “Nama : $nama_komentar <br> $isikomentar <hr>” ;

}
?>

<html>
<body><br>
<b>Isi Komentar :</b>
<form action=”?entry=comment” method=”post”>
nama : <input type=text name=nama><br>
komentar : <br><textarea name=komentar rows=6 width=200></textarea><br>
<input type=submit name=submit value=submit>
<input type=hidden name=id_artikel value=”<?php print $id ;?>”> </form>
</body>
</html>