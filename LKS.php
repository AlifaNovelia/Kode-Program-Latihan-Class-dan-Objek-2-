<?php
// buat class laptop
class laptop {
  
   // buat property untuk class laptop
   var $pemilik;
   var $merk;
   var $ukuran_layar;
  
   // buat method untuk class laptop
   function hidupkan_laptop() {
     return "Hidupkan Laptop";
   }
   function matikan_laptop() {
     return "Matikan Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
?>