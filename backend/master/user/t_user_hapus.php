<?php

require_once '../../../connection/conn.php';

if ($_GET['method'] == "delete" && isset($_GET['id'])) {
    $ID_USER = $_GET['id'];
    $query = "DELETE FROM m_user WHERE ID_USER = :ID_USER";
    $params = array(':ID_USER' => $ID_USER);
    $deleteTingkatan = GetQuery2($query, $params);
    if ($deleteTingkatan->rowCount() > 0) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>document.location.href='../../../pengguna.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>