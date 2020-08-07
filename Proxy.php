<?php
class Proxy{
  function basi(){
   echo("Tomat : 100 Hari <br> ");
   echo("Sawi : 30 Hari <br> ");
   echo("Mentimun : 20 Hari <br> ");
   echo("Cabai : 90 Hari <br> ");
  }
  function awet(){
   echo("Beras : 90 Hari <br> ");
   echo("Minyak : 15 Hari <br> ");
   echo("Merica : 1.095 Hari <br> ");
   echo("Terigu : 65 Hari <br> ");	  
  }
 }

 class basi extends Proxy{
  function __construct() {
  } 
 }

 class awet extends Proxy{
  function __construct() { 
  }
 }

 class basi1{
  private $basi = null;
  function __construct() {
   echo("Waktu Panen Bahan Baku yang Mudah Basi<br><br>"); 
  }
  
  function basi(){
   if($this->basi == null){
    $this->basi = new basi();
   }
   echo("---------------------------");
  }
 } 
 
 $basi1 = new basi1();
 $basi = new basi();
 $basi->basi();   
 $basi1->basi();

 class awet1{
  private $awet = null;
  function __construct() {
   echo("<br>Waktu Panen Bahan Baku yang Awet<br><br>"); 
  } 
  function awet(){
   if($this->awet == null){
    $this->awet = new awet();
   }
  }
 }
 
 $awet1 = new awet1();
 $awet = new awet();
 $awet->awet();  
 $awet1->awet();
?>  

