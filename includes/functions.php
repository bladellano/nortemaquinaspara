<?php 

   function criaResumo($string,$caracteres) { 
        $string = strip_tags($string); 
        if (strlen($string) > $caracteres) { 
        while (substr($string,$caracteres,1) <> ' ' && ($caracteres < strlen($string))) { 
            $caracteres++; }; 
        }; 
        return substr($string,0,$caracteres) . '...'; 
    }

           ?>