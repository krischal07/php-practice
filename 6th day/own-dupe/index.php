<?php
// Online PHP compiler to run PHP program online
// Print "Try programiz.pro" message
// echo "Try programiz.pro";

$string = "aabbc";

$ans = findDupe($string);

if($ans == true){
    echo"Dupe found";
}

else{
    echo "Dupe not found";
}
function findDupe($string){
for($i=0;$i<strlen($string);$i++){
    for($j=1;$j<strlen($string);$j++){
        if($string[$i]==$string[$j]){
          return true;
          break;
        }
        else{
        
            return false;
        }
        }
    }
    
}

?>