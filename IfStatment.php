<?php

$nilai = 80;
$absen = 70;


// if ($nilai >= 100 && $absen >= 70) {
//     echo "Selamat, Anda Berhasil Lulus!";
// } else {
//     echo "Anda Gagal Ujian!";
// }


if ($nilai >= 90 && $absen >= 70) {
    echo "Nilai Anda A";
} else if ($nilai >= 80 && $absen >= 70) {
    echo "Nilai Anda B";
} else if ($nilai >= 60 && $absen >= 70) {
    echo "Nilai Anda C";
} else {
    echo "Anda Tidak Lulus!";
}


if (10 + 10 === 20) :
    echo "Benar";
endif;
