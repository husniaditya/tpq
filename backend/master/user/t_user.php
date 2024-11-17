<?php
$ID_USER_LOGIN = $_SESSION['LOGINUS'];

$query = "SELECT *,CASE WHEN STATUS = 1 THEN 'AKTIF' ELSE 'TIDAK AKTIF' END STATUS FROM m_user";
// Execute the query without parameters
$getUser =  GetQuery2($query, []);
$rowUser = $getUser->fetchAll(PDO::FETCH_ASSOC);

$options = [
    'cost' => 12,
];

if (isset($_GET['method'])) {
    if ($_GET['method'] == "add") {
        if (isset($_POST['simpan'])) {
            $ID_USER = createKode("m_user", "ID_USER", "USR", 3);
            $USERNAME = $_POST['USERNAME'];
            $PASSWORD = $_POST['PASSWORD'];
            $NAMA = $_POST['NAMA'];
            $EMAIL = $_POST['EMAIL'];
            $AKSES = $_POST['AKSES'];

            $USER_PASSWORD = password_hash($PASSWORD, PASSWORD_BCRYPT, $options);

            $query = "INSERT INTO m_user 
              (ID_USER, USERNAME, USER_PASSWORD, NAMA, EMAIL, AKSES, STATUS, INPUT_OLEH, INPUT_TANGGAL) 
              VALUES 
              (:ID_USER, :USERNAME, :PASSWORD, :NAMA, :EMAIL, :AKSES, 1, :INPUT_OLEH, NOW())";

            // Set up the parameters array with named placeholders
            $params = array(
                ':ID_USER' => $ID_USER,
                ':USERNAME' => $USERNAME,
                ':PASSWORD' => $USER_PASSWORD,
                ':NAMA' => $NAMA,
                ':EMAIL' => $EMAIL,
                ':AKSES' => $AKSES,
                ':INPUT_OLEH' => $ID_USER_LOGIN
            );

            // Execute the query with parameters using GetQuery2
            $addUser = GetQuery2($query, $params);

            if ($addUser->rowCount() > 0) {
                // Success: Display a success message and redirect
                echo "<script>alert('Data berhasil ditambahkan');</script>";
                echo "<script>document.location.href='pengguna.php';</script>";
            } else {
                // Failure: Display an error message and stay on the current page
                echo "<script>alert('Data gagal ditambahkan');</script>";
            }
        }
    }
    if (($_GET['method'] == "view" || $_GET['method'] == "edit") && isset($_GET['id'])) {
        // Fetch Data
        $ID_USER = $_GET['id'];
        $query = "SELECT *,CASE WHEN STATUS = 1 THEN 'Aktif' ELSE 'Tidak Aktif' END STATUS_DETAIL FROM m_user WHERE ID_USER = :ID_USER";
        $params = array(':ID_USER' => $ID_USER);
        $getUser = GetQuery2($query, $params);
        $rowUser = $getUser->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rowUser as $row) {
            extract($row);
        }

        // Update Data
        if (isset($_POST['simpan'])) {
            $USERNAME = $_POST['USERNAME'];
            $PASSWORD = $_POST['PASSWORD'];
            $NAMA = $_POST['NAMA'];
            $EMAIL = $_POST['EMAIL'];
            $AKSES = $_POST['AKSES'];
            $STATUS = $_POST['STATUS'];
        
            // Update Query
            if ($PASSWORD != "") {
                $query = "UPDATE m_user SET USERNAME = :USERNAME, USER_PASSWORD = :PASSWORD, NAMA = :NAMA, EMAIL = :EMAIL, AKSES = :AKSES, STATUS = :STATUS, INPUT_OLEH = :INPUT_OLEH, INPUT_TANGGAL = NOW() WHERE ID_USER = :ID_USER";
        
                $params = array(
                    ':ID_USER' => $ID_USER,
                    ':USERNAME' => $USERNAME,
                    ':PASSWORD' => password_hash($PASSWORD, PASSWORD_BCRYPT, $options),
                    ':NAMA' => $NAMA,
                    ':EMAIL' => $EMAIL,
                    ':AKSES' => $AKSES,
                    ':STATUS' => $STATUS,
                    ':INPUT_OLEH' => $ID_USER_LOGIN
                );
            } else {
                $query = "UPDATE m_user SET USERNAME = :USERNAME, NAMA = :NAMA, EMAIL = :EMAIL, AKSES = :AKSES, STATUS = :STATUS, INPUT_OLEH = :INPUT_OLEH, INPUT_TANGGAL = NOW() WHERE ID_USER = :ID_USER";
        
                $params = array(
                    ':ID_USER' => $ID_USER,
                    ':USERNAME' => $USERNAME,
                    ':NAMA' => $NAMA,
                    ':EMAIL' => $EMAIL,
                    ':AKSES' => $AKSES,
                    ':STATUS' => $STATUS,
                    ':INPUT_OLEH' => $ID_USER_LOGIN
                );
            }
            $editUser = GetQuery2($query, $params); // Use $params consistently
        
            // Check if the query executed successfully
            if ($editUser->rowCount() > 0) {
                echo "<script>alert('Data berhasil diubah');</script>";
                echo "<script>document.location.href='pengguna.php';</script>";
            } else {
                echo "<script>alert('Data gagal diubah');</script>";
            }
        }        
    }
}
?>