<?php
/*
Autor: Diego varela colin
Grupo: 4PAM
Fecha: 17/02/2022
Contacto: diegovarela,2005@gmail.com
Descripcion: El programa trata de hacer la serie fibonacci con las tres estructuras
repetitivas
*/

$total=10;

$NUM1=0;
$NUM2=2;

for($i=0;$i<=$total;$i++){
    $NUM1=$i-1;
    $NUM2=$i-2;
    printf("%d <br>",$NUM2+$NUM1);

}

$i=0;
$NUM1=0;  //Lineas para formatear la pagina html y reestablecer valores
$NUM2=0;
print("<br><br>");


while($i<$total){
    $i++;
    $NUM1=$i-1;
    $NUM2=$i-2;
    printf("%d <br>",$NUM2+$NUM1);


}

$i=0;
$NUM1=0;  //Lineas para formatear la pagina html y reestablecer valores
$NUM2=0;
print("<br><br>");


do{
    $i++;
    $NUM1=$i-1;
    $NUM2=$i-2;
    printf("%d <br>",$NUM2+$NUM1);

}while($i<$total);


?>
