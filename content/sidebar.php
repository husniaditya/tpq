<?php
if ($_SESSION['LOGINAKS'] == 'Admin') {
    include 'menu/admin.php';
}
if ($_SESSION['LOGINAKS'] == 'Ustadz/Asatidz') {
    include 'menu/ustadz.php';
}
if ($_SESSION['LOGINAKS'] == 'Ketua DKM') {
    include 'menu/ketua.php';
}
if ($_SESSION['LOGINAKS'] == 'Wali') {
    include 'menu/wali.php';
}
?>