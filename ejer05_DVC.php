<?php
/*
Autor: Diego varela colin
Grupo: 4PAM
Fecha: 17/02/2022
Contacto: diegovarela,2005@gmail.com
Descripcion: El programa trata de resolver la ecuacion
x^n+m
*/
$V_X=2;
$N=2;
$M=2;

//para resolver la ecuacion simplemente se suman las potencias
$SumPot=$N+$M;
$V_X=$V_X**$SumPot;

echo "Valor final de la ecuacion: $V_X";
?>