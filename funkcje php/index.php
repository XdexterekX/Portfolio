<?php
function pokazImie($imie) {
    echo "$imie <br>";
  }
  
  pokazImie("Marcin");


  function policzPole(int $a, int $h) {
    return $a * $h / 2 ;
  }
  echo policzPole(5,2); 

  echo "<br>";

  function zwrocIloczyn(int $x, int $z){
    return ($x * $z);
  }
  echo zwrocIloczyn(4,5);

  echo "<br>";


function czyUjemna(int $g){
    if ($g < "0"){
        echo "true";
            }
        }
echo czyUjemna(-4);

echo "<br>";

function max3(int $r, int $t, int $y){
    echo max($r, $t, $y);
    
}
echo max3(5,1,9);







 


















?>