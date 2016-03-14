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
//membuat class database
class database {
    // property
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "root";
    private $dbName = "i_siswa";

    // method koneksi MySQL
    public function connect() {
        mysql_connect($this->dbHost, $this->dbUser, $this->dbPass) or die("Koneksi MySQL Gagal. " .mysql_error());
        mysql_select_db($this->dbName) or die ("Koneksi Database Gagal. " .mysql_error());
    }
}
?>