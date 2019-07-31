<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public static function sizeFile($size){
        
        $wynik='';
        $kilobajt=1024;
	$megabajt=$kilobajt*1024;
	$gigabajt=$megabajt*1024;
	$terabajt=$gigabajt*1024;
                
        if($size>=0 && $size<$kilobajt){
            
            $wynik=ceil($size);
            $wynik.=' B';
        }
        else if($size>=$kilobajt && $size<$megabajt){
            
            $wynik=ceil($size/$kilobajt);
            $wynik.=' KB';
        }
        else if($size>=$megabajt && $size<$gigabajt){
            
            $wynik=ceil($size/$megabajt);
            $wynik.=' MB';
        }
        else if($size>=$gigabajt && $size<$terabajt){
            
            $wynik=ceil($size/$gigabajt);
            $wynik.=' GB';
        } 
        else {
            $wynik=ceil($size/$terabajt);
            $wynik.=' TB';
        }
        
        return $wynik;
    }
}
