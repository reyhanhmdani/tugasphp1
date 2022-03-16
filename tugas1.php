<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
    <?php 
     for ($baris = 1; $baris <= 9; $baris++): ?>
      <tr>
        <?php for ($kolom = 1; $kolom <= 9; $kolom++): ?>
              <td>
                  <?php
                  if ($baris == 0) { //baris 0
                      if ($kolom == 0) {
                          echo '   ';
                      }
                      else {
                          echo ' '.$kolom.' ';
                      }
                  }
                  //baris 1-9
                  else {
                      $nilai_diagonal = $baris * 2 - 1;
                      $nilai_diagonal_2 = (9 - $baris) * 2;
    
                      if ($kolom == 0) { // sisi kiri
                          echo ' '.$baris.' ';
                      } elseif ($baris == $kolom) { // diagonal utama
                          echo $nilai_diagonal; 
                      } elseif ($baris != 5 && $baris == (10 - $kolom)) { // diagonal kebalikan kecuali baris 5
                          echo $nilai_diagonal_2; 
                      } elseif (($baris <= 5 && $kolom < $baris) || ($baris > 5 && $kolom < (10 - $baris)) ) { // sisi kiri diagonal
                          echo ' A ';
                      } elseif (($baris <= 5 && 10 < ($baris + $kolom)) || ($baris > 5 && $baris < $kolom)) { // sisi kanan diagonal
                          echo ' B '; 
                      } else { // sisanya
                          echo ' - ';
                      }
                  } ?>
              </td>
          <?php endfor; ?>
      </tr>
    <?php endfor;
      //    for ($i = 1; $i <= 9; $i++ ) {
      //     echo "<tr>";
      //     for ($j = 1; $j<= 9; $j++){
         
         
      //       if ($i == $j){
      //         echo "<td>" . (($i *2) - 1) . "</td>";
      //       }
      //       elseif (9 - $i - -1 == $j){
      //         echo "<td>" . (($j * 2 ) - 2) . "</td>";
      //     }
      //     elseif ($i >= $j + 1){
      //       echo "<td>A</td>";
      //   }
       
           
      //     else {
      //       echo "<td>-</td>";
      //     }
      //     }
      //     echo "</tr>"; 
     
      //  }   
    //   for ($i = 1; $i <= 9; $i++ ) {
    //     echo "<tr>";
    //     for ($j = 1; $j<= 9; $j++){
       
    //       if (9 - $i - -1 == $j){
    //         echo "<td>" . (($j * 2 ) - 2) . "</td>";
    //   }elseif ($i == $j){
    //     echo "<td>" . (($i *2) - 1) . "</td>";
    //   }elseif ($j >= $i){
    //           echo "<td>B</td>";
    //       }elseif ($i < 9 - $j +1){
    //               echo "<td>A</td>";
    //           } 
    //       //   elseif ($j < 9 - $i - 2){
    //       //     echo "<td>A</td>";
    //       // } 
    //         //   elseif ($i > 9 - $j +1){
    //         //     echo "<td>B</td>";
    //         // } 
    //     else {
    //       echo "<td>-</td>";
    //     }
    //     }
    //     echo "</tr>"; 
   
    //  }   
    //     ?>
    </table>
    </div>
    </header>
        </body>