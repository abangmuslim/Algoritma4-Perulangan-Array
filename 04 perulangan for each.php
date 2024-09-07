<?php
$books = [
    "Panduan Belajar PHP untuk Pemula with ahmadi",
    "Membangun Aplikasi Web dengan PHP with ahmadi",
    "Tutorial PHP dan MySQL with ahmadi",
    "Membuat Chat Bot dengan PHP with ahmadi"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";
?>
