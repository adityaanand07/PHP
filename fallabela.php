<?php

function test(){
  for($i=1; $i<100; $i++){
    switch(0){
      case $i%15:
      	echo "$i Linianos \n";
      break;
      case $i%3:
      	echo "$i Linio \n";
      break;
      case $i%5:
      	echo"$i IT\n";
      break;
    }
  }
}
test()
?>
