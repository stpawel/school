<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public static function convPlInEng($str) 
    {    
        $arg1 = array('ą', 'Ą', 'ć', 'Ć', 'ę', 'Ę', 'ł', 'Ł', 'ń', 'Ń', 'ó', 'Ó', 'ś', 'Ś', 'ź', 'Ź', 'ż', 'Ż', ' ', ',', ':', ';','"', '.', '?');
	$arg2 = array('a', 'A', 'c', 'C', 'e', 'E', 'l', 'L', 'n', 'N', 'o', 'O', 's', 'S', 'z', 'Z', 'z', 'Z', '-', '', '', '', '', '', '');
	$out = str_replace ( $arg1, $arg2, $str );
        
        return $out;   
    }
}
