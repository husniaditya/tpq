<?php
$ID_USER = $_SESSION['LOGINUS'];

$NAMA_ANGGOTA = "";
$ID_TINGKATAN = "";
$ID_TINGKATAN_CARI = "";
$JK = "";
$ORANG_TUA = "";
$HANDPHONE = "";
$ALAMAT = "";

$tingkatan = "SELECT * FROM m_tingkatan WHERE STATUS = 1";
$getTingkatan = GetQuery2($tingkatan, []);
$rowTingkatan = $getTingkatan->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['cari'])) {
    $NAMA_ANGGOTA = $_POST['NAMA_ANGGOTA'];
    $ID_TINGKATAN = $_POST['ID_TINGKATAN'];
    $ID_TINGKATAN_CARI = $_POST['ID_TINGKATAN'];
    $JK = $_POST['JK'];
    $ORANG_TUA = $_POST['ORANG_TUA'];
    $HANDPHONE = $_POST['HANDPHONE'];
    $ALAMAT = $_POST['ALAMAT'];

    $query = "SELECT a.*,CONCAT(a.TEMPAT_LAHIR,', ',DATE_FORMAT(a.TANGGAL_LAHIR, '%d %M %Y')) TTL,CASE WHEN a.STATUS_ANGGOTA = 1 THEN 'Aktif' ELSE 'Tidak Aktif' END STATUS_ANGGOTA_DESK,t.NAMA_TINGKATAN,DATE_FORMAT(a.INPUT_TANGGAL, '%d %M %Y') INPUT_TANGGAL FROM t_anggota a
    LEFT JOIN m_tingkatan t ON a.ID_TINGKATAN = t.ID_TINGKATAN 
    WHERE a.NAMA_ANGGOTA LIKE :NAMA_ANGGOTA AND a.ID_TINGKATAN LIKE :ID_TINGKATAN AND a.JK LIKE :JK AND a.ORANG_TUA LIKE :ORANG_TUA AND a.HANDPHONE LIKE :HANDPHONE AND a.ALAMAT LIKE :ALAMAT AND a.STATUS_ANGGOTA = 1 AND a.STATUS = 1";
    // Set up the parameters array with named placeholders
    $params = array(
        ':NAMA_ANGGOTA' => '%' . $NAMA_ANGGOTA . '%',
        ':ID_TINGKATAN' => '%' . $ID_TINGKATAN . '%',
        ':JK' => '%' . $JK . '%',
        ':ORANG_TUA' => '%' . $ORANG_TUA . '%',
        ':HANDPHONE' => '%' . $HANDPHONE . '%',
        ':ALAMAT' => '%' . $ALAMAT . '%'
    );
    // Execute the query with parameters
    $getAnggota = GetQuery2($query, $params);
    $rowAnggota = $getAnggota->fetchAll(PDO::FETCH_ASSOC);

} else {
    $query = "SELECT a.*,CONCAT(a.TEMPAT_LAHIR,', ',DATE_FORMAT(a.TANGGAL_LAHIR, '%d %M %Y')) TTL,CASE WHEN a.STATUS_ANGGOTA = 1 THEN 'Aktif' ELSE 'Tidak Aktif' END STATUS_ANGGOTA_DESK,t.NAMA_TINGKATAN,DATE_FORMAT(a.INPUT_TANGGAL, '%d %M %Y') INPUT_TANGGAL FROM t_anggota a
    LEFT JOIN m_tingkatan t ON a.ID_TINGKATAN = t.ID_TINGKATAN 
    WHERE a.STATUS_ANGGOTA = 1 AND a.STATUS = 1";
    // Execute the query without parameters
    $getAnggota =  GetQuery2($query, []);
    $rowAnggota = $getAnggota->fetchAll(PDO::FETCH_ASSOC);
}
?>