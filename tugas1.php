<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="s1tyle.css">
</head>
<body> 
    
    <header>
    <div class="atas">
    <div class="judul"> logic 3,1</div>
    <table  border="1" cellpadding="10" cellspacing="0">
    <div class="kolom-num">
       <div class="num">1</div>
       <div class="num">2</div>
       <div class="num">3</div>
       <div class="num">4</div>
       <div class="num">5</div>
       <div class="num">6</div>
       <div class="num">7</div>
       <div class="num">8</div>
       <div class="num">9</div>
    </div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
                   
                if ( $i == $j){
                  echo "<td>" . (($i *2) - 1) . "</td>";
                }
              else {
                echo "<td>-</td>";
              }
              }
              echo "</tr>"; 
         
           }   
            
        ?>
    </table>
    </div>

        <div class="atas">
    <div class="judul"> logic 3,2</div>
    <table  border="1" cellpadding="10" cellspacing="0">
    <div class="kolom-num">
       <div class="num">1</div>
       <div class="num">2</div>
       <div class="num">3</div>
       <div class="num">4</div>
       <div class="num">5</div>
       <div class="num">6</div>
       <div class="num">7</div>
       <div class="num">8</div>
       <div class="num">9</div>
    </div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
             
                if (9 - $i - -1 == $j){
                  echo "<td>" . (($j *2 ) - 2) . "</td>";
                }
              else {
                echo "<td>-</td>";
              }
              }
              echo "</tr>"; 
         
           }   
            
        ?>
    </table>
    </div>


    <div class="atas">
    <div class="judul"> logic 3,3</div>
    <table  border="1" cellpadding="10" cellspacing="0">
    <div class="kolom-num">
       <div class="num">1</div>
       <div class="num">2</div>
       <div class="num">3</div>
       <div class="num">4</div>
       <div class="num">5</div>
       <div class="num">6</div>
       <div class="num">7</div>
       <div class="num">8</div>
       <div class="num">9</div>
    </div>
    <?php 
         for ($i = 1; $i <= 9; $i++ ) {
          echo "<tr>";
          for ($j = 1; $j<= 9; $j++){
         
         
            if ($i == $j){
              echo "<td>" . (($i *2) - 1) . "</td>";
            }
            elseif (9 - $i - -1 == $j){
              echo "<td>" . (($j *2 ) - 2) . "</td>";
          }
          
          else {
            echo "<td>-</td>";
          }
          }
          echo "</tr>"; 
     
       }   
            
        ?>
    </table>
    </div>
    </header>

    <header>
        <div class="atas">
           <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 3,4</div>
        <div class="kolom-num">
       <div class="num">1</div>
       <div class="num">2</div>
       <div class="num">3</div>
       <div class="num">4</div>
       <div class="num">5</div>
       <div class="num">6</div>
       <div class="num">7</div>
       <div class="num">8</div>
       <div class="num">9</div>
    </div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
  
              if ($i == $j){
                  echo "<td>" . (($i *2) - 1) . "</td>";
                }
                elseif ($i >= $j){
                  echo "<td>A</td>";
              }
              else {
                echo "<td>-</td>";
              }
              }
              echo "</tr>"; 
         
           }   
            
        ?>
    </table>
   </div> 

   <div class="atas">
           <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 3,5</div>
        <div class="kolom-num">
       <div class="num">1</div>
       <div class="num">2</div>
       <div class="num">3</div>
       <div class="num">4</div>
       <div class="num">5</div>
       <div class="num">6</div>
       <div class="num">7</div>
       <div class="num">8</div>
       <div class="num">9</div>
    </div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
                      
              if ($i == $j){
                  echo "<td>" . (($i *2) - 1) . "</td>";
                }
                elseif ($i >= $j){
                  echo "<td>A</td>";
              }
              else {
                echo "<td>B</td>";
              }
              }
              echo "</tr>"; 
         
           }   
            
        ?>
    </table>
   </div> 

   <div class="atas">
    <div class="judul"> logic 3,6</div>
    <table  border="1" cellpadding="10" cellspacing="0">
    <div class="kolom-num">
       <div class="num">1</div>
       <div class="num">2</div>
       <div class="num">3</div>
       <div class="num">4</div>
       <div class="num">5</div>
       <div class="num">6</div>
       <div class="num">7</div>
       <div class="num">8</div>
       <div class="num">9</div>
    </div>
    <div>
    <table border="1" cellpadding="10" cellspacing="0">
     <?php
     

     for ($i = 1; $i <= 9; $i++ ) {
        echo "<tr>";
        for ($j = 1; $j<= 9; $j++){
       
       
          if ($i == $j){
            echo "<td>" . (($i *2) - 1) . "</td>";
          }
          elseif (9 - $i - -1 == $j){
            echo "<td>" . (($j *2 ) - 2) . "</td>";
        }
        elseif (($i <= 5 && $j < $i) || ($i > 5 && $j < (10 - $i)) ) { // sisi kiri 
          echo "<td>A</td>";
      }
       elseif (($i <= 5 && 9 < ($i + $j)) || ($i > 4 && $i < $j)) { // sisi kanan 
          echo  "<td>B</td>"; 
      }
       else { // sisanya
          echo "<td>-</td>";
      }
        }
     }   
      
     ?>


    </table>
    </div>
    </table>
    </div>
    </header>
        </body>
