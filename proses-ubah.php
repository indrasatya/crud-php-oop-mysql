 <!-- Aplikasi CRUD
 ************************************************
 * Developer    : Indra Styawantoro
 * Company      : Indra Studio
 * Release Date : 1 Maret 2016
 * Website      : http://www.indrasatya.com, http://www.kulikoding.net
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone        : +62-856-6991-9769
 * BBM          : 7679B9D9
 -->
 
<?php
// memanggil class siswa
require_once "function/siswa.php";
// instance objek siswa
$siswa = new siswa();

$nis           = mysql_real_escape_string(trim($_POST['nis']));
$nama          = mysql_real_escape_string(trim($_POST['nama']));
$tempat_lahir  = mysql_real_escape_string(trim($_POST['tempat_lahir']));

$tanggal       = $_POST['tanggal_lahir'];
$tgl           = explode('-',$tanggal);
$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

$jenis_kelamin = $_POST['jenis_kelamin'];
$agama         = $_POST['agama'];
$alamat        = mysql_real_escape_string(trim($_POST['alamat']));
$no_telepon    = $_POST['no_telepon'];

$siswa->update(	$nama,
				$tempat_lahir,
				$tanggal_lahir,
				$jenis_kelamin,
				$agama,
				$alamat,	
				$no_telepon,
				$nis);							
?>