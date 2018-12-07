<?php
$numbers = range(99,1);
foreach ($numbers as $number) {
$n=$number-1;
   if($n==0){
       $n='no more';
       echo  '<br>'.$number.' bottles of beer on the wall, '.$number.' bottles of beer. Take it down and pass it around, '.$n.' bottles of beer on the wall.';
   }else{echo  '<br>'.$number.' bottles of beer on the wall, '.$number.' bottles of beer. Take one down and pass it around, '.$n.' bottles of beer on the wall.'.'<br>';}
};
echo '<br><br>No more bottles of beer on the wall, '. $n.' bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.';
 