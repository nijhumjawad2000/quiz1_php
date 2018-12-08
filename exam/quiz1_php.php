<?php
$numbers = range(99,1);
foreach ($numbers as $number){
$n=$number-1;
   if($n==0){
       $n="no more";
    $color ="red";
    echo  '<br><div style ="color:'.$color.'">'.$number.' bottle of beer on the wall, '.$number.' bottle of beer. Take it down and pass it around, '.$n.' bottles of beer on the wall.</div><br>';
   }else if($n==1){
    $n=1;
    $color ="black";
    echo  '<br><div style ="color:'.$color.'">'.$number.' bottles of beer on the wall, '.$number.' bottles of beer. Take one down and pass it around, '.$n.' bottle of beer on the wall.</div><br>';
    }else if($number%2==0){
        $color ="black";
        echo  '<br><div style ="color:'.$color.'">'.$number.' bottles of beer on the wall, '.$number.' bottles of beer. Take one down and pass it around, '.$n.' bottles of beer on the wall.</div><br>';
    }else{
        $color = "red";
        echo  '<br><div style ="color:'.$color.'">'.$number.' bottles of beer on the wall, '.$number.' bottles of beer. Take one down and pass it around, '.$n.' bottles of beer on the wall.</div><br>';
    }
};
echo '<br>No more bottles of beer on the wall, '. $n.' bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.';
 