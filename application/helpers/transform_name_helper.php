<?php

function numeroEmReais($numero) {
	    return "R$ " . number_format($numero, 2, ",", ".");
}

   # Transforma os caracteres ASCII em símbolos HTML
   function converte_ascii($check_string,$line_feed)
   {
      $string_ajustada = '';
      for ($poscarret=0; $poscarret<strlen($check_string); $poscarret++)
      {
           $test_car = substr($check_string,$poscarret,1);
           
           if     ($line_feed==1 and ord($test_car)==10) $string_ajustada = $string_ajustada.'';
           elseif ($line_feed==1 and ord($test_car)==13) $string_ajustada = $string_ajustada.'<br>';
           elseif (ord($test_car)>126)                   $string_ajustada = $string_ajustada.'&#'.ord($test_car).';';
           else                                          $string_ajustada = $string_ajustada.$test_car;
      }
      return $string_ajustada;
   }