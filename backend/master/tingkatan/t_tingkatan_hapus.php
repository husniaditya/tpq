<?php

require_once '../../../connection/conn.php';

if ($_GET['method'] == "delete" && isset($_GET['id'])) {
    $ID_TINGKATAN = $_GET['id'];
    $query = "DELETE FROM m_tingkatan WHERE ID_TINGKATAN = :ID_TINGKATAN";
    $params = array(':ID_TINGKATAN' => $ID_TINGKATAN);
    $deleteTingkatan = GetQuery2($query, $params);
    if ($deleteTingkatan->rowCount() > 0) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>document.location.href='../../../tingkatan.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>