<?php

require_once '../../../connection/conn.php';

if ($_GET['method'] == "delete" && isset($_GET['id'])) {
    $ID_IURAN = $_GET['id'];
    $query = "UPDATE t_iuran SET STATUS = 0 WHERE ID_IURAN = :ID_IURAN";
    $params = array(':ID_IURAN' => $ID_IURAN);
    $deleteIuran = GetQuery2($query, $params);
    if ($deleteIuran->rowCount() > 0) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>document.location.href='../../../iuran.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>