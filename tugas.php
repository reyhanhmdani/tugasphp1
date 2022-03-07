
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tugas.css">
</head>
<body> 
    
    <header>
    <div class="atas">
    <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 1,1</div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
             
                if ($i == $j){
                    echo "<td>+</td>";
                }
                // if ($i % 10 == 1){
                //     echo "<td>+</td>";
                // }
              else {
                echo "<td></td>";
              }
              }
              echo "</tr>"; 
         
           }   
            
        ?>
    </table>
    </div>

    <div class="atas">
    <table  border="1" cellpadding="10" cellspacing="0">
    <div class="judul"> logic 1,2</div>
    <?php 
          for ($i = 1; $i <=9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<=9; $j++){
             
                // if ($i == $j){
                //     echo "<td>+</td>";
                // }
                if ($i % 9 == 1){
                    echo "<td>+</td>";
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
    <div class="judul"> logic 1,3</div>
    <?php 
          for ($i = 1; $i <=9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<=9; $j++){
             
                // if ($i == $j){
                //     echo "<td>+</td>";
                // }
                if ($j % 9 == 1){
                    echo "<td>+</td>";
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

    <main>
        <div class="bawah">
         
        <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 1,4</div>
    <?php 
          for ($i = 1; $i <=9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<=9; $j++){
            //  cara si izra
                if ( $i == 1 || $j == 9){
                    echo "<td>+</td>";
                }
                // if ($i % 10 == 1 || $j % 10 == 0){
                //     echo "<td>+</td>";
                // }
               
              else {
                echo "<td>-</td>";
              }
              }
              echo "</tr>"; 
         
           }   
            
        ?>
    </table>
          

        </div>
        <div class="bawah">
 
        <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 1,5</div>
    <?php 
          for ($i = 1; $i <=9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<=9; $j++){
             
                // if ($i == $j){
                //     echo "<td>+</td>";
                // }
                if ( $i == 1 || $j == 1){
                    echo "<td>+</td>";
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
        <div class="bawah">

        <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 1,6</div>
    <?php 
          for ($i = 1; $i <=9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<=9; $j++){
             
                // if ($i == $j){
                //     echo "<td>+</td>";
                // }
                if ( $i == 1 || $j == 9 || $i == 5 || $j == 5 || $i == 9 || $j == 1){
                    echo "<td>+</td>";
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
        </main>
 
        <main>
           <div class="dalamketiga">
           <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 2,1</div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
             
               
                if ($i == $j){
                    echo "<td>+</td>";
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
        
   <div class="dalamketiga">
           <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 2,2</div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
             
               
                if (9 - $i - -1 == $j){
                    echo "<td>+</td>";
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
   <div class="dalamketiga">
           <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 2,3</div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
             
                if (9 - $i - -1 == $j){
                  echo "<td>+</td>";
              }
                if ($i == $j){
                    echo "<td>+</td>";
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




        </main>

        
        <main>
        <div class="dalamketiga">
           <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 2,4</div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
             
               
                if ($i >= $j){
                    echo "<td>+</td>";
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

   <div class="dalamketiga">
           <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 2,5</div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
             
               
                if ($i > 9 - $j){
                    echo "<td>+</td>";
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

   <div class="dalamketiga">
           <table  border="1" cellpadding="10" cellspacing="0">
        <div class="judul"> logic 2,6</div>
    <?php 
          for ($i = 1; $i <= 9; $i++ ) {
              echo "<tr>";
              for ($j = 1; $j<= 9; $j++){
             
               
                if ($j >= $i + 1){
                    echo "<td>-</td>";
                }
                elseif ($i < 9 - $j +1){
                  echo "<td>-</td>";
              }
              else {
                echo "<td>+</td>";
              }
              }
              echo "</tr>"; 
         
           }   
            
        ?>
    </table>
   </div> 
   
        </main>
</body>
</html>

