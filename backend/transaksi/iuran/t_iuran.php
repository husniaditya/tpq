<?php
$ID_USER = $_SESSION['LOGINUS'];

$anggota = "SELECT * FROM t_anggota WHERE STATUS = 1 ORDER BY NAMA_ANGGOTA";
$getAnggota = GetQuery2($anggota, []);
$rowAnggota = $getAnggota->fetchAll(PDO::FETCH_ASSOC);

$query = "SELECT i.*,a.NAMA_ANGGOTA, t.NAMA_TINGKATAN,FORMAT(REPLACE(i.JUMLAH,'-',''), 0) FJUMLAH,DATE_FORMAT(i.TGL_IURAN, '%Y-%m') as TGL_IURAN,
    -- Subquery to get the cumulative saldo
    (SELECT CASE
        WHEN SUM(i2.JUMLAH) < 0 THEN CONCAT('(', FORMAT(ABS(SUM(i2.JUMLAH)), 0), ')')
        ELSE FORMAT(SUM(i2.JUMLAH), 0)
    END
     FROM t_iuran i2 
     WHERE i2.ID_ANGGOTA = i.ID_ANGGOTA 
       AND i2.STATUS = 1
       AND i2.ID_IURAN <= i.ID_IURAN) AS FSALDO,
    CASE
        WHEN i.DK = 'D' THEN 'Debit'
        ELSE 'Kredit' 
    END AS IURAN_DK,
    CASE
        WHEN i.DK = '' THEN 'color: green;'
        ELSE 'color: red;' 
    END AS IURAN_COLOR
FROM t_iuran i
LEFT JOIN t_anggota a ON a.ID_ANGGOTA = i.ID_ANGGOTA AND a.STATUS = 1
LEFT JOIN m_tingkatan t ON a.ID_TINGKATAN = t.ID_TINGKATAN
WHERE i.STATUS = 1";
// Execute the query without parameters
$getIuran =  GetQuery2($query, []);
$rowIuran = $getIuran->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['method'])) {
    if ($_GET['method'] == "add") {
        if (isset($_POST['simpan'])) {
            $ID_IURAN = createKode("t_iuran", "ID_IURAN", "IUR", 3);
            $ID_ANGGOTA = $_POST['ID_ANGGOTA'];
            $TGL_IURAN = $_POST['TGL_IURAN'];
            $DK = "";
            $JUMLAH = $_POST['JUMLAH'];
            $KETERANGAN = $_POST['KETERANGAN'];

            if ($DK == "K") {
                $JUMLAH = $JUMLAH * -1;
            }

            $query = "INSERT INTO t_iuran (ID_IURAN, ID_ANGGOTA, TGL_IURAN, DK, JUMLAH, KETERANGAN, INPUT_OLEH, INPUT_TANGGAL) VALUES (:ID_IURAN, :ID_ANGGOTA, :TGL_IURAN, :DK, :JUMLAH, :KETERANGAN, :INPUT_OLEH, NOW())";

            // Set up the parameters array with named placeholders
            $params = array(
                ':ID_IURAN' => $ID_IURAN,
                ':ID_ANGGOTA' => $ID_ANGGOTA,
                ':TGL_IURAN' => $TGL_IURAN,
                ':DK' => $DK,
                ':JUMLAH' => $JUMLAH,
                ':KETERANGAN' => $KETERANGAN,
                ':INPUT_OLEH' => $ID_USER
            );

            // Execute the query with parameters using GetQuery2
            $addIuran = GetQuery2($query, $params);

            if ($addIuran->rowCount() > 0) {
                // Success: Display a success message and redirect
                echo "<script>alert('Data berhasil ditambahkan');</script>";
                echo "<script>document.location.href='iuran.php';</script>";
            } else {
                // Failure: Display an error message and stay on the current page
                echo "<script>alert('Data gagal ditambahkan');</script>";
            }
        }
    }
    if (($_GET['method'] == "view" || $_GET['method'] == "edit") && isset($_GET['id'])) {
        // Fetch Data
        $ID_IURAN = $_GET['id'];
        $query = "SELECT i.*,REPLACE(i.JUMLAH,'-','') JUMLAH,i.ID_ANGGOTA EDIT_ANGGOTA,a.NAMA_ANGGOTA,
        CASE WHEN i.DK = 'D' THEN 'Debit' ELSE 'Kredit' END AS DK_DESK
        FROM t_iuran i
        LEFT JOIN t_anggota a on i.ID_ANGGOTA = a.ID_ANGGOTA
        WHERE i.ID_IURAN = :ID_IURAN";
        $params = array(':ID_IURAN' => $ID_IURAN);
        $getIuran = GetQuery2($query, $params);
        $rowIuran = $getIuran->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rowIuran as $row) {
            extract($row);
        }

        // Update Data
        if (isset($_POST['simpan'])) {
            $ID_ANGGOTA = $_POST['ID_ANGGOTA'];
            $TGL_IURAN = $_POST['TGL_IURAN'];
            $DK = "";
            $JUMLAH = $_POST['JUMLAH'];
            $KETERANGAN = $_POST['KETERANGAN'];
            
            if ($DK == "K") {
                $JUMLAH = $JUMLAH * -1;
            }

            // Update Query
            $query = "UPDATE t_iuran SET ID_ANGGOTA = :ID_ANGGOTA, TGL_IURAN = :TGL_IURAN, DK = :DK, JUMLAH = :JUMLAH, KETERANGAN = :KETERANGAN, INPUT_OLEH = :INPUT_OLEH, INPUT_TANGGAL = NOW() WHERE ID_IURAN = :ID_IURAN";
            $params = array(
                ':ID_IURAN' => $ID_IURAN,
                ':ID_ANGGOTA' => $ID_ANGGOTA,
                ':TGL_IURAN' => $TGL_IURAN,
                ':DK' => $DK,
                ':JUMLAH' => $JUMLAH,
                ':KETERANGAN' => $KETERANGAN,
                ':INPUT_OLEH' => $ID_USER
            );
            $editIuran = GetQuery2($query, $params);

            // Check if the query executed successfully
            if ($editIuran->rowCount() > 0) {
                echo "<script>alert('Data berhasil diubah');</script>";
                echo "<script>document.location.href='iuran.php';</script>";
            } else {
                echo "<script>alert('Data gagal diubah');</script>";
            }
        }
    }
}
?>