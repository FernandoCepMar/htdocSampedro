<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$dados=[];
for($i = 0; $i < 6 ; $i++){
    
    $dados[$i]= rand(1,6);
}
print_r($dados);

for($i=0;$i<6;$i++){
   echo '<img src="dado".$dados[$i].".jpg">';
}


 
   /*<img src=<?php echo '"dado'. cara().'.jpg"'; ?>>
   <img src=<?php echo '"dado'.cara().'.jpg"'; ?>>
   <img src=<?php echo '"dado'.cara().'.jpg"'; ?>>
   <img src=<?php echo '"dado'.cara().'.jpg"'; ?>>
   <img src=<?php echo '"dado'.cara().'.jpg"'; ?>>

   */


?>

 

   <?php 

   $dados=[];

   function cara(){
    return rand(1,6);
   }
   ?>
   
</body>
</html>