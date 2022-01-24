<?php
$conn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

//pemanggilan tabel
function query($query)
{
    global $conn;

    //mengambil seluruh data
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    //pemanggilan elemen data dengan rapih
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $agama = htmlspecialchars($data['agama']);
    $sekola_asal = htmlspecialchars($data['sekolah_asal']);
    $foto_maba = htmlspecialchars($data['foto_maba']);

    $query = "INSERT INTO calon_mhs
  VALUES
  (null,'$nama','$alamat','$jenis_kelamin','$agama','$sekola_asal','$foto_maba');";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM calon_mhs WHERE id =$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $agama = htmlspecialchars($data['agama']);
    $sekolah_asal = htmlspecialchars($data['sekolah_asal']);
    $foto_maba = htmlspecialchars($data['foto_maba']);

    $query = "UPDATE  calon_mhs SET
    nama ='$nama',
    alamat ='$alamat',
    jenis_kelamin ='$jenis_kelamin',
    agama ='$agama',
    sekolah_asal ='$sekolah_asal',
    foto_maba ='$foto_maba'
    WHERE id =$id;";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query = "SELECT * FROM calon_mhs WHERE nama LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function search($keyword)
{
    global $conn;

    $query = "SELECT * FROM daftar_dosen WHERE nama LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function delete($iid)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM daftar_dosen WHERE id =$iid") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}