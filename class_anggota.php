<?php
// class anggota 
class Anggota {

    var $nama;
    var $alamat;
    var $pekerjaan;
    var $telpon;
    // method untuk menampilkan data
    function tampildata() {
        $query = "select * from anggota";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }
    // method untuk menambahkan data 
    function tambahdata($nama, $alamat, $pekerjaan, $telpon) {
        $query = "INSERT INTO anggota(nama, alamat, pekerjaan, telpon) VALUES ('$nama','$alamat','$pekerjaan','$telpon')";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:index.php');
            // jika proses penambahan data berhasil akan kembali ke index
        } else {
            die("Data gagal Disimpan");
            // jika proses penambahan data tidak berhasil akan muncl pesan data gagal disimpan
        }
    }
    // method untuk menampilkan data yang akan di edit
    function editdata($id) {
        $query = "select * from anggota where id_anggota='$id'";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }
    // method untuk memproses edit data 
    function prosesedit($id, $nama, $alamat, $pekerjaan, $telpon) {
        $query = "UPDATE anggota SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan', telpon='$telpon' WHERE id_anggota='$id'";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:index.php');
             // jika proses pengeditan data berhasil akan kembali ke index

        } else {
            die("Data gagal Disimpan");
            // jika proses pengeditan data tidak berhasil akan muncl pesan data gagal disimpan
        }
    }
    // method untuk menghapus data 
    function hapusdata($id) {
        $query = "DELETE FROM anggota WHERE id_anggota='$id'";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:index.php');
             // jika proses menghapus data berhasil akan kembali ke index

        } else {
            die("data gagal dihapus");
            // jika proses penghapusan data tidak berhasil akan muncl pesan data gagal dihapus
        }
    }

    function caridata($cari) {
        $query = "select * from anggota where nama like '%$cari%' ";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }

}

?>
