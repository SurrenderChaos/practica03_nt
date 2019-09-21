<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class porcentajes extends Controller
{
    public function porcentajes($percent, $scale, $value, $max){
       
        $value = 40;
        $max = 150;
        $scale = 100;

        
        if ( !empty($max) ) { $percent = ($value * 100) / $max; } 
        else { $percent = 0; }

        
        if ( $percent > 100 ) { $percent = 100; }

        return $percent;


    }
}
