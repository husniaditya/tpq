<?php

$host = "localhost";
$database = "tpq";
$username = "andre";
$password = "andre2024";

try {
    $db1 = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	ini_set('max_execution_time', 300); //300 seconds = 5 minutes
	ini_set('upload_max_filesize', '10M');
    session_start();

    $YEAR = date("Y");
    $MONTH = date("m");
    $DATE = date("d");

    function GetQuery2($query, $params = [])
    {
        global $db1;
        $result = $db1->prepare($query);
        $result->execute($params);
        return $result;
    }

    function createKode($namaTabel, $namaKolom, $awalan, $jumlahAngka)
    {
        global $db1, $YEAR, $MONTH;
        $angkaAkhir = 0;
        
        // Query to find the maximum existing number for the current year and month
        $stmt = $db1->query("SELECT MAX(RIGHT($namaKolom, $jumlahAngka)) AS akhir FROM $namaTabel WHERE SUBSTR($namaKolom, 5, 6) = '$YEAR$MONTH'");
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (isset($row["akhir"])) {
                $angkaAkhir = intval($row["akhir"]);
            }
        }

        // Increment the number to generate the next code
        $angkaAkhir = $angkaAkhir + 1;
        
        // Format the code with the prefix, year-month, and padded number
        return $awalan . '-' . $YEAR . $MONTH . '-' . str_pad($angkaAkhir, $jumlahAngka, '0', STR_PAD_LEFT);
    }

    function autoInc($namaTabel, $namaKolom, $jumlahAngka)
    {
        global $db1;
        $angkaAkhir = 0;
        $stmt = $db1->query("select max(right($namaKolom,$jumlahAngka)) as akhir from $namaTabel");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (isset($row["akhir"])) {
                $angkaAkhir = intval($row["akhir"]);
            }
        }
        $angkaAkhir = $angkaAkhir + 1;
        return substr("00000000" . $angkaAkhir, -1 * $jumlahAngka);
    }

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>