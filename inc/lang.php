<?php
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'id';
}

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ['id', 'en'])) {
        $_SESSION['lang'] = $lang;
    }
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}

$lang_id = [
    'data_mahasiswa' => 'Data Mahasiswa',
    'pembimbing'     => 'Pembimbing',
    'laporan'        => 'Laporan',
    'pengaturan'     => 'Pengaturan',
    'profil'         => 'Profil',
    'keluar'         => 'Keluar',
];

$lang_en = [
    'data_mahasiswa' => 'Students',
    'pembimbing'     => 'Supervisors',
    'laporan'        => 'Reports',
    'pengaturan'     => 'Settings',
    'profil'         => 'Profile',
    'keluar'         => 'Logout',
];

$lang = $_SESSION['lang'] === 'en' ? $lang_en : $lang_id;
?>
