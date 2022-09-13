<?php
$result = dubleArr(array(1,2,3));

if (!$result) {
    echo "引数が不正です!";
    return;
}

foreach ($result as $num) {
    echo $num;
    echo "\n";
}

function dubleArr($darr) {
   if (!is_array($darr)){
       return FALSE;
   }
   
   $airarr=[]; 
   foreach ($darr as $num) {
       $airarr[] = $num*2;
   }
   return $airarr;
}
?>