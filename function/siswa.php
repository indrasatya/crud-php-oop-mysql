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
// memanggil class database
require_once "function/database.php";
// instance objek db
$db = new database();
// koneksi ke MySQL dengan method connect
$db->connect();

/* class siswa */
class siswa {

    /* method untuk menampilkan data siswa */
    function view() {
        $query =  mysql_query("SELECT * FROM is_siswa ORDER BY nis DESC");
        while ($data = mysql_fetch_array($query)) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    /* Method untuk menyimpan data ke tabel siswa */
    function insert($nis, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon) {
        $query = mysql_query("INSERT INTO is_siswa (nis, 
                                                    nama,
                                                    tempat_lahir,
                                                    tanggal_lahir,
                                                    jenis_kelamin,
                                                    agama,
                                                    alamat,
                                                    no_telepon) 
                                            VALUES ('$nis',
                                                    '$nama',
                                                    '$tempat_lahir',
                                                    '$tanggal_lahir',
                                                    '$jenis_kelamin',
                                                    '$agama',
                                                    '$alamat',
                                                    '$no_telepon')");

        if($query){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 2 */
            header("Location: index.php?alert=2");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=1");
        }
    }

    /* Method untuk menampilkan data siswa berdasarkan kode siswa */
    function get_siswa($nis) {
        $query = mysql_query("SELECT * FROM is_siswa WHERE nis='$nis'");

        return mysql_fetch_array($query);
    }
    
    /* Method untuk mengubah data pada tabel siswa */
    function update($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat, $no_telepon, $nis) {
        $query = mysql_query("UPDATE is_siswa SET nama            = '$nama',
                                                  tempat_lahir    = '$tempat_lahir',
                                                  tanggal_lahir   = '$tanggal_lahir',
                                                  jenis_kelamin   = '$jenis_kelamin',
                                                  agama           = '$agama',
                                                  alamat          = '$alamat',
                                                  no_telepon      = '$no_telepon'
                                            WHERE nis             = '$nis'"); 

        if($query){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 3 */
            header("Location: index.php?alert=3");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=1");
        }
    }
    
    /* Method untuk menghapus data pada tabel siswa */
    function delete($nis) {
        $query = mysql_query("DELETE FROM is_siswa WHERE nis = '$nis'");

        if($query){
            /* jika data berhasil disimpan alihkan ke halaman siswa dan tampilkan pesan = 4 */
            header("Location: index.php?alert=4");
        }
        else{
            /* jika data gagal disimpan alihkan ke halaman siswa dan tampilkan pesan = 1 */
            header("Location: index.php?alert=1");
        }
    }
}
?>
