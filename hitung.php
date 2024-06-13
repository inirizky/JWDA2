<?php
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = 0;

    if (is_numeric($angka1) && is_numeric($angka2)) {
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = 'Pembagian dengan nol tidak diperbolehkan';
                }
                break;
            default:
                $hasil = 'Operator tidak valid';
                break;
        }
    } else {
        $hasil = 'Masukkan angka yang valid';
    }

    header('Location: index.php?hasil=' . urlencode($hasil));
    exit();
?>