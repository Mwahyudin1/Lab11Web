<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/

include('class/form.php');

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("module/home.php","Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini untuk melanjutkan ke halaman berikutnya :</h3>";
$form->displayForm();
echo "</body></html>";
?>