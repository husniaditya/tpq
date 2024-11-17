<?php
$ID_USER = $_SESSION['LOGINUS'];

$query = "SELECT *,CASE WHEN STATUS = 1 THEN 'AKTIF' ELSE 'TIDAK AKTIF' END STATUS FROM m_tingkatan";
// Execute the query without parameters
$getTingkatan =  GetQuery2($query, []);
$rowTingkatan = $getTingkatan->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['method'])) {
    if ($_GET['method'] == "add") {
        if (isset($_POST['simpan'])) {
            $ID_TINGKATAN = createKode("m_tingkatan", "ID_TINGKATAN", "TKT", 3);
            $NAMA_TINGKATAN = $_POST['NAMA_TINGKATAN'];
            $DESKRIPSI = $_POST['DESKRIPSI'];

            $query = "INSERT INTO m_tingkatan 
              (ID_TINGKATAN, NAMA_TINGKATAN, DESKRIPSI, STATUS, INPUT_OLEH, INPUT_TANGGAL) 
              VALUES 
              (:ID_TINGKATAN, :NAMA_TINGKATAN, :DESKRIPSI, 1, :INPUT_OLEH, NOW())";

            // Set up the parameters array with named placeholders
            $params = array(
                ':ID_TINGKATAN' => $ID_TINGKATAN,
                ':NAMA_TINGKATAN' => $NAMA_TINGKATAN,
                ':DESKRIPSI' => $DESKRIPSI,
                ':INPUT_OLEH' => $ID_USER
            );

            // Execute the query with parameters using GetQuery2
            $addTingkatan = GetQuery2($query, $params);

            if ($addTingkatan->rowCount() > 0) {
                // Success: Display a success message and redirect
                echo "<script>alert('Data berhasil ditambahkan');</script>";
                echo "<script>document.location.href='tingkatan.php';</script>";
            } else {
                // Failure: Display an error message and stay on the current page
                echo "<script>alert('Data gagal ditambahkan');</script>";
            }
        }
    }
    if (($_GET['method'] == "view" || $_GET['method'] == "edit") && isset($_GET['id'])) {
        // Fetch Data
        $ID_TINGKATAN = $_GET['id'];
        $query = "SELECT *,CASE WHEN STATUS = 1 THEN 'AKTIF' ELSE 'TIDAK AKTIF' END STATUS_DETAIL FROM m_tingkatan WHERE ID_TINGKATAN = :ID_TINGKATAN";
        $params = array(':ID_TINGKATAN' => $ID_TINGKATAN);
        $getTingkatan = GetQuery2($query, $params);
        $rowTingkatan = $getTingkatan->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rowTingkatan as $row) {
            extract($row);
        }

        // Update Data
        if (isset($_POST['simpan'])) {
            $NAMA_TINGKATAN = $_POST['NAMA_TINGKATAN'];
            $DESKRIPSI = $_POST['DESKRIPSI'];
            $STATUS = $_POST['STATUS'];

            // Update Query
            $query = "UPDATE m_tingkatan SET NAMA_TINGKATAN = :NAMA_TINGKATAN, DESKRIPSI = :DESKRIPSI, STATUS = :STATUS, INPUT_OLEH = :INPUT_OLEH, INPUT_TANGGAL = NOW() WHERE ID_TINGKATAN = :ID_TINGKATAN";
            $params = array(
                ':ID_TINGKATAN' => $ID_TINGKATAN,
                ':NAMA_TINGKATAN' => $NAMA_TINGKATAN,
                ':DESKRIPSI' => $DESKRIPSI,
                ':STATUS' => $STATUS,
                ':INPUT_OLEH' => $ID_USER
            );
            $editTingkatan = GetQuery2($query, $params);

            // Check if the query executed successfully
            if ($editTingkatan->rowCount() > 0) {
                echo "<script>alert('Data berhasil diubah');</script>";
                echo "<script>document.location.href='tingkatan.php';</script>";
            } else {
                echo "<script>alert('Data gagal diubah');</script>";
            }
        }
    }
}
?>