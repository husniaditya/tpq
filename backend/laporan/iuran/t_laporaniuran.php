<?php
$ID_USER = $_SESSION['LOGINUS'];

$ID_IURAN = "";
$NAMA_ANGGOTA = "";
$DK = "";
$TGL_IURAN = "";

if (isset($_POST['cari'])) {
    $ID_IURAN = $_POST['ID_IURAN'];
    $NAMA_ANGGOTA = $_POST['NAMA_ANGGOTA'];
    $DK = $_POST['DK'];
    $TGL_IURAN = $_POST['TGL_IURAN'];

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
            END AS IURAN_COLOR,
            (SELECT CASE
                WHEN SUM(i.JUMLAH) < 0 THEN CONCAT('(', FORMAT(ABS(SUM(i.JUMLAH)), 0), ')')
                ELSE FORMAT(SUM(i.JUMLAH), 0)
                END
                FROM t_iuran i
                left join t_anggota a on a.ID_ANGGOTA = i.ID_ANGGOTA
                WHERE i.STATUS = 1 AND i.ID_IURAN LIKE :ID_IURAN AND a.NAMA_ANGGOTA LIKE :NAMA_ANGGOTA AND i.DK LIKE :DK AND i.TGL_IURAN LIKE :TGL_IURAN) AS TOTAL_SALDO
        FROM t_iuran i
        LEFT JOIN t_anggota a ON a.ID_ANGGOTA = i.ID_ANGGOTA AND a.STATUS = 1
        LEFT JOIN m_tingkatan t ON a.ID_TINGKATAN = t.ID_TINGKATAN
        WHERE i.STATUS = 1 AND i.ID_IURAN LIKE :ID_IURAN AND a.NAMA_ANGGOTA LIKE :NAMA_ANGGOTA AND i.DK LIKE :DK AND i.TGL_IURAN LIKE :TGL_IURAN";
    // Set up the parameters array with named placeholders
    $params = array(
        ':ID_IURAN' => '%' . $ID_IURAN . '%',
        ':NAMA_ANGGOTA' => '%' . $NAMA_ANGGOTA . '%',
        ':DK' => '%' . $DK . '%',
        ':TGL_IURAN' => '%' . $TGL_IURAN . '%'
    );
    // Execute the query with parameters
    $getIuran = GetQuery2($query, $params);
    $rowIuran = $getIuran->fetchAll(PDO::FETCH_ASSOC);

} else {
    $query = "SELECT i.*,a.NAMA_ANGGOTA, t.NAMA_TINGKATAN, DATE_FORMAT(i.TGL_IURAN, '%Y-%m') as TGL_IURAN,
                FORMAT(REPLACE(i.JUMLAH, '-', ''), 0) FJUMLAH,
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
                END AS IURAN_COLOR,
                (SELECT CASE
                    WHEN SUM(JUMLAH) < 0 THEN CONCAT('(', FORMAT(ABS(SUM(JUMLAH)), 0), ')')
                    ELSE FORMAT(SUM(JUMLAH), 0)
                    END
                    FROM t_iuran WHERE STATUS = 1) AS TOTAL_SALDO
            FROM t_iuran i
            LEFT JOIN t_anggota a ON a.ID_ANGGOTA = i.ID_ANGGOTA
            LEFT JOIN m_tingkatan t ON a.ID_TINGKATAN = t.ID_TINGKATAN
            WHERE i.STATUS = 1";
    // Execute the query without parameters
    $getIuran =  GetQuery2($query, []);
    $rowIuran = $getIuran->fetchAll(PDO::FETCH_ASSOC);
}
?>