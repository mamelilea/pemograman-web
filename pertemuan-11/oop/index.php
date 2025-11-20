<?php
include "menteri.php";

$menteri1 = new menteri("Thalita");
echo "<h3>Data Pengurus BEM</h3>";
echo "Nama: " . $menteri1->getNama() . "<br>";
echo $menteri1->getJabatan();
