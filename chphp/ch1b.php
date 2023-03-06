<?php

       $nilai = 85;

       if($nilai >=90) {
           $grade ="sangat baik";
       } else if($nilai >=80){
        $grade ="baik"; 
       }else if($nilai >=70){
            $grade ="cukup";
       }else if($nilai >=50){
            $grade ="kurang";
       }else if($nilai >= 0){
            $grade ="sangat kurang";
       } 

    echo( "nilai produktif rpl ". $nilai ." adalah $grade");
?>