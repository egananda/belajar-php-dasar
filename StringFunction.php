<?php

// menggabungkan array menjadi string
var_dump(join(",", [1, 2, 3, 4, 5, 6, 7, 8, 9]));

// memecah string menjadi array
var_dump(" ", ["Ega", "Nanda", "Brilian"]);

// mengubah string menjadi huruf kecil semua
var_dump(strtolower("EGA NANDA BRILIAN"));

// mengubah string menjadi huruf besar semua
var_dump(strtoupper("ega nanda brilian"));


// menghilangkan spasi depan dan belakang
var_dump(trim("                     EGA                   "));

// memotong string
var_dump(substr("Ega Nanda Brilian", 0, 9));
