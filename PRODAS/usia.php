<?php
$umur=10;
if ($umur >=0 && $umur<=17) {
    echo "Anak-anak dibawah umur";
}else if ($umur >=18 && $umur <=65) {
    echo "Pemuda";
}else if ($umur >=66 && $umur <=79) {
    echo "Setengah baya";
}else if ($umur >=80 && $umur <=99) {
    echo "Orang tua";
}else if ($umur >=100) {
    echo "Orang tua lanjut usia";
}else{
    echo "tidak ada yang benar";
}
?>