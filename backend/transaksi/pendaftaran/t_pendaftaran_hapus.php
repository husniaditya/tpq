<?php

require_once '../../../connection/conn.php';

if ($_GET['method'] == "delete" && isset($_GET['id'])) {
    $ID_ANGGOTA = $_GET['id'];
    $query = "DELETE FROM t_anggota WHERE ID_ANGGOTA = :ID_ANGGOTA";
    $params = array(':ID_ANGGOTA' => $ID_ANGGOTA);
    $deleteTingkatan = GetQuery2($query, $params);
    if ($deleteTingkatan->rowCount() > 0) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>document.location.href='../../../pendaftaran.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>