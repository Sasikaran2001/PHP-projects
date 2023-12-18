<?php

   $A=$_GET['variableA'];
   $B=$_GET['variableB'];
//    Swapping
   $A=$A+$B;
   $B=$A-$B;
   $A=$A-$B;


   echo "The Variable one $B";
//    echo "The Variable two $A"; 
   ?>

