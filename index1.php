<?php

Interface Makhluk{  
      public function Makan();  
      public function Bergerak();  
      public function Beranak();  
 }  
   
 class manusia Implements Makhluk {  
      public function Makan() {  
           return "manusia makan nasi<br/>";  
      }             
             
      public function Bergerak() {  
           return "manusia bergerak dengan berjalan, jongkok dan melompat<br/>";  
      }  
        
      public function Beranak() {  
           return "manusia beranak dengan melahirkan<br/>";  
      }  
 }  
   
 class hiu Implements Makhluk {  
      public function Makan() {  
           return "hiu makan ikan yang lebih kecil dari ukurannya<br/>";  
      }  
             
      public function Bergerak() {  
           return "hiu bergerak dengan berenang menggunakan sirip<br/>";  
      }  
        
      public function Beranak() {  
           return "hiu beranak dengan bertelur dengan beranak<br/>";  
      }  
 }  
   
 $manusia = new manusia;  
 $hiu = new hiu;  
   
 echo "<b>Perilaku manusia : </b><br/>";  
 echo $manusia->Makan();  
 echo $manusia->Bergerak();  
 echo $manusia->Beranak();  
   
 echo "<br/>";  
 echo "<b>Perilaku hiu : </b><br/>";  
 echo $hiu->Makan();  
 echo $hiu->Bergerak();  
 echo $hiu->Beranak();