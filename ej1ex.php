<?php
$max=0;//$max=$v[0];
for($i=0;$i<sizeof($v);$i++){
   if($v[$i]%2==0and$v[$i]>$max){
       $max=$v[$i];
    }
  }
  echo $max;