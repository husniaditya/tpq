<?php
$ID_USER = $_SESSION['LOGINUS'];

$tingkatan = "SELECT * FROM m_tingkatan WHERE STATUS = 1";
$getTingkatan = GetQuery2($tingkatan, []);
$rowTingkatan = $getTingkatan->fetchAll(PDO::FETCH_ASSOC);

$query = "SELECT a.*,CONCAT(a.TEMPAT_LAHIR,', ',DATE_FORMAT(a.TANGGAL_LAHIR, '%d %M %Y')) TTL,CASE WHEN a.STATUS_ANGGOTA = 1 THEN 'Aktif' ELSE 'Tidak Aktif' END STATUS_ANGGOTA_DESK,t.NAMA_TINGKATAN,DATE_FORMAT(a.INPUT_TANGGAL, '%d %M %Y') INPUT_TANGGAL FROM t_anggota a
LEFT JOIN m_tingkatan t ON a.ID_TINGKATAN = t.ID_TINGKATAN 
WHERE a.STATUS_ANGGOTA = 1 AND a.STATUS = 1";
// Execute the query without parameters
$getAnggota =  GetQuery2($query, []);
$rowAnggota = $getAnggota->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['method'])) {
    if ($_GET['method'] == "add") {
        if (isset($_POST['simpan'])) {
            $ID_ANGGOTA = createKode("t_anggota", "ID_ANGGOTA", "TPQ", 3);
            $ID_TINGKATAN = $_POST['ID_TINGKATAN'];
            $NAMA_ANGGOTA = $_POST['NAMA_ANGGOTA'];
            $TANGGAL_BERGABUNG = $_POST['TANGGAL_BERGABUNG'];
            $TEMPAT_LAHIR = $_POST['TEMPAT_LAHIR'];
            $TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];
            $JK = $_POST['JK'];
            $ORANG_TUA = $_POST['ORANG_TUA'];
            $PEKERJAAN = $_POST['PEKERJAAN'];
            $DEPARTEMEN = $_POST['DEPARTEMEN'];
            $ALAMAT = $_POST['ALAMAT'];
            $HANDPHONE = $_POST['HANDPHONE'];

            $query = "INSERT INTO t_anggota 
              (ID_ANGGOTA, ID_TINGKATAN, NAMA_ANGGOTA, ALAMAT, TEMPAT_LAHIR, TANGGAL_LAHIR, JK, ORANG_TUA, PEKERJAAN, DEPARTEMEN, HANDPHONE, TANGGAL_BERGABUNG, STATUS_ANGGOTA, STATUS, INPUT_OLEH, INPUT_TANGGAL) 
              VALUES 
              (:ID_ANGGOTA, :ID_TINGKATAN, :NAMA_ANGGOTA, :ALAMAT, :TEMPAT_LAHIR, :TANGGAL_LAHIR, :JK, :ORANG_TUA, :PEKERJAAN, :DEPARTEMEN, :HANDPHONE, :TANGGAL_BERGABUNG, 1, 1, :INPUT_OLEH, NOW())";

            // Set up the parameters array with named placeholders
            $params = array(
                ':ID_ANGGOTA' => $ID_ANGGOTA,
                ':ID_TINGKATAN' => $ID_TINGKATAN,
                ':NAMA_ANGGOTA' => $NAMA_ANGGOTA,
                ':ALAMAT' => $ALAMAT,
                ':TEMPAT_LAHIR' => $TEMPAT_LAHIR,
                ':TANGGAL_LAHIR' => $TANGGAL_LAHIR,
                ':JK' => $JK,
                ':ORANG_TUA' => $ORANG_TUA,
                ':PEKERJAAN' => $PEKERJAAN,
                ':DEPARTEMEN' => $DEPARTEMEN,
                ':HANDPHONE' => $HANDPHONE,
                ':TANGGAL_BERGABUNG' => $TANGGAL_BERGABUNG,
                ':INPUT_OLEH' => $ID_USER
            );

            // Execute the query with parameters using GetQuery2
            $addAnggota = GetQuery2($query, $params);

            if ($addAnggota->rowCount() > 0) {
                // Success: Display a success message and redirect
                echo "<script>alert('Data berhasil ditambahkan');</script>";
                echo "<script>document.location.href='pendaftaran.php';</script>";
            } else {
                // Failure: Display an error message and stay on the current page
                echo "<script>alert('Data gagal ditambahkan');</script>";
            }
        }
    }
    if (($_GET['method'] == "view" || $_GET['method'] == "edit") && isset($_GET['id'])) {
        // Fetch Data
        $ID_ANGGOTA = $_GET['id'];
        $query = "SELECT a.*,CONCAT(a.TEMPAT_LAHIR,', ',DATE_FORMAT(a.TANGGAL_LAHIR, '%d %M %Y')) TTL,CASE WHEN a.STATUS_ANGGOTA = 1 THEN 'Aktif' ELSE 'Tidak Aktif' END STATUS_ANGGOTA_DESK,t.NAMA_TINGKATAN,DATE_FORMAT(a.INPUT_TANGGAL, '%d %M %Y') INPUT_TANGGAL, a.ID_TINGKATAN EDIT_TINGKATAN  FROM t_anggota a
        LEFT JOIN m_tingkatan t ON a.ID_TINGKATAN = t.ID_TINGKATAN 
        WHERE a.ID_ANGGOTA = :ID_ANGGOTA";
        $params = array(':ID_ANGGOTA' => $ID_ANGGOTA);
        $getAnggota = GetQuery2($query, $params);
        $rowAnggota = $getAnggota->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rowAnggota as $row) {
            extract($row);
        }

        // Update Data
        if (isset($_POST['simpan'])) {
            $ID_TINGKATAN = $_POST['ID_TINGKATAN'];
            $NAMA_ANGGOTA = $_POST['NAMA_ANGGOTA'];
            $TANGGAL_BERGABUNG = $_POST['TANGGAL_BERGABUNG'];
            $TEMPAT_LAHIR = $_POST['TEMPAT_LAHIR'];
            $TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];
            $JK = $_POST['JK'];
            $ORANG_TUA = $_POST['ORANG_TUA'];
            $PEKERJAAN = $_POST['PEKERJAAN'];
            $DEPARTEMEN = $_POST['DEPARTEMEN'];
            $ALAMAT = $_POST['ALAMAT'];
            $HANDPHONE = $_POST['HANDPHONE'];
            $STATUS_ANGGOTA = $_POST['STATUS_ANGGOTA'];
            $TANGGAL_KELUAR = $_POST['TANGGAL_KELUAR'];

            // Update Query
            $query = "UPDATE t_anggota SET ID_TINGKATAN = :ID_TINGKATAN, NAMA_ANGGOTA = :NAMA_ANGGOTA, ALAMAT = :ALAMAT, TEMPAT_LAHIR = :TEMPAT_LAHIR, TANGGAL_LAHIR = :TANGGAL_LAHIR, JK = :JK, ORANG_TUA = :ORANG_TUA, PEKERJAAN = :PEKERJAAN, DEPARTEMEN = :DEPARTEMEN, HANDPHONE = :HANDPHONE, TANGGAL_BERGABUNG = :TANGGAL_BERGABUNG, STATUS_ANGGOTA = :STATUS_ANGGOTA, TANGGAL_KELUAR = :TANGGAL_KELUAR, INPUT_OLEH = :INPUT_OLEH, INPUT_TANGGAL = NOW() WHERE ID_ANGGOTA = :ID_ANGGOTA";
            $params = array(
                ':ID_ANGGOTA' => $ID_ANGGOTA,
                ':ID_TINGKATAN' => $ID_TINGKATAN,
                ':NAMA_ANGGOTA' => $NAMA_ANGGOTA,
                ':ALAMAT' => $ALAMAT,
                ':TEMPAT_LAHIR' => $TEMPAT_LAHIR,
                ':TANGGAL_LAHIR' => $TANGGAL_LAHIR,
                ':JK' => $JK,
                ':ORANG_TUA' => $ORANG_TUA,
                ':PEKERJAAN' => $PEKERJAAN,
                ':DEPARTEMEN' => $DEPARTEMEN,
                ':HANDPHONE' => $HANDPHONE,
                ':TANGGAL_BERGABUNG' => $TANGGAL_BERGABUNG,
                ':STATUS_ANGGOTA' => $STATUS_ANGGOTA,
                ':TANGGAL_KELUAR' => $TANGGAL_KELUAR,
                ':INPUT_OLEH' => $ID_USER
            );
            $editTingkatan = GetQuery2($query, $params);

            // Check if the query executed successfully
            if ($editTingkatan->rowCount() > 0) {
                echo "<script>alert('Data berhasil diubah');</script>";
                echo "<script>document.location.href='pendaftaran.php';</script>";
            } else {
                echo "<script>alert('Data gagal diubah');</script>";
            }
        }
    }
}
?>