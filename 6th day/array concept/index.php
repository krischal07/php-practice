<?php 
    $randomString = "aabbc";
    $arrayOfString = str_split($randomString);//changing the string into an array
    // var_dump($arrayOfString);
    $counterArr = array();
    forEach($arrayOfString as $element){
        if(isset($counterArr[$element])){
            $counterArr[$element]++;
        }
        else{
            $counterArr[$element]=1;
        }
        
      
    }
    
    // var_dump($counterArr);
?>